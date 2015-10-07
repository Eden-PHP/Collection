[![Build Status](https://api.travis-ci.org/Eden-PHP/Collection.png)](https://travis-ci.org/Eden-PHP/Collection)
===
# Collection

Manipulating table, matrix or multidimensional data in most cases can be expressed as a collection. Collections in *Eden* is defined loosely and as a utility class to help managing data in a controlled and chainable format. The basic setup of a collection is described in `Figure 1`.

**Figure 1. Setup**

	$users = array(
		array(
			'user_name' => 'Chris',
			'user_email' => 'cblanquera@openovate.com',
			'user_location' => 'Manila, Philippines'
		),
		
		array(
			'user_name' => 'Dan',
			'user_email' => 'dmolina@openovate.com',
			'user_location' => 'Manila, Philippines'
		),
	);
	
	eden('collection', $users);

Collections do exactly the same thing as models except it manipulates multiple models instead. Collections can be iterable and access as arrays as well. Collections only hold model objects so if you wanted to use your own extended model, you would need to call `->setModel('Your_Model')`. From here we can access properties in our collection as a method, property or back as an array. `Figure 2` shows the ways to access data in action.

**Figure 2. Accessing Collection, Models and Rows **

	//set user name for all rows
	$collection->setUserName('Chris');
	
	// set or get any abstract key for all rows
	$collection->setAnyThing();
	
	//collections are iterable
	foreach($collection as $model) {        
		echo $model->getUserName().' ';
		echo $model['user_email'];
	}
	 
	//access as array
	echo $collection[0]['user_name'];
	//set as array
	$collection[0]['user_email'] = 'my@email.com'; 

Some other utility methods not covered by th above examples are date formating and copying from one column to another. `Figure 3`, show how we would go about doing these things.

**Figure 3. Utility methods**
	
	//for each row, copy the value of post_user to the user_id column
	$collection->copy('post_user', 'user_id');
	
	//remove the row with the index of 1, reindexes all the rows
	$collection->cut(1);
	
	//returns the number of rows
	$collection->count();
	
	//adds a new row
	$collection->add(array('post_title' => 'Hi'));
	
	//returns a table array (no objects)
	$collection->get();      

====

#Contributing to Eden

##Setting up your machine with the Eden repository and your fork

1. Fork the main Eden repository (https://github.com/Eden-PHP/Collection)
2. Fire up your local terminal and clone the *MAIN EDEN REPOSITORY* (git clone git://github.com/Eden-PHP/Collection.git)
3. Add your *FORKED EDEN REPOSITORY* as a remote (git remote add fork git@github.com:*github_username*/Collection.git)

##Making pull requests

1. Before anything, make sure to update the *MAIN EDEN REPOSITORY*. (git checkout master; git pull origin master)
2. If PHP Unit testing is included in this package please make sure to update it and run the test to ensure everything still works (phpunit)
3. Once updated with the latest code, create a new branch with a branch name describing what your changes are (git checkout -b bugfix/fix-twitter-auth)
    Possible types:
    - bugfix
    - feature
    - improvement
4. Make your code changes. Always make sure to sign-off (-s) on all commits made (git commit -s -m "Commit message")
5. Once you've committed all the code to this branch, push the branch to your *FORKED EDEN REPOSITORY* (git push fork bugfix/fix-twitter-auth)
6. Go back to your *FORKED EDEN REPOSITORY* on GitHub and submit a pull request.
7. An Eden developer will review your code and merge it in when it has been classified as suitable.
