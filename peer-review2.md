## P3 Peer Review 

+ Reviewer's name: Arnab Bhar
+ Reviwee's name: mvibhakar
+ URL to Reviewe's P3 Github Repo URL: *https://github.com/mvibhakar/p3*

## 1. Interface

### Initial impressions

+ Interface is simple and serves it purpose to provide a system to calulate grades.
+ Good choice of layout and nice and clean 

### Confusing parts of the interface

+ It doesnot mention what are the steps or fields which are needed to be validated 
+ Since The Form is small should not have to scroll to enter information 

### Things that work

+ It is a simple app to submit a series of grades and there associated classes 

### Suggestions

+ There is no information in the interface regarding what are required fields and what is range of values they expect. It would have been better if interface provide this information.


## 2. Functional testing

**Test 1 - Submitting empty form**
+ Description: Submit form without specifying any field or without specifying some fields.
+ Outcome: It shows the validation errors which is expected .But it resets the drop down fields for the type of classes

**Test 2 - Entering digits with 3 fields and selecting all the class dropdowns**
+ Description: Submit form fields with 2 digits .
+ Outcome: It is accepted as expected and the grade is calulated 

**Test 3 - Entering Alphanumeric fields**
+ Description: Submit form with alphanumeric letters and numbers.
+ Outcome: A validation error is thrown as expected  .But it resets the drop down fields for the type of classes

## 3. Code: Routes
 + GET routes and names and nomenclature are used appropriately.

## 4. Code: Views
+ Yes template inheritance is used properly.
+ There is no separation of concern issues in view files.
+ Very clean blade code.