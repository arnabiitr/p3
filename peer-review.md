## P3 Peer Review

+ Reviewer's name: Arnab Bhar
+ Reviwee's name: Alex C
+ URL to Reviewe's P3 Github Repo URL: *https://github.com/calivine/p3*

## 1. Interface

### Initial impressions

+ Interface is simple and serves it purpose to submit a simple order.
+ Good choice of layout and nice and clean 

### Confusing parts of the interface

+ Name field should be on the top also it should have a validation for alphanumeric characters.
+ Since The Form is small should not have to scroll to enter information 

### Things that work

+ It is a simple app to submit a order with some common choices to start with 

### Suggestions

+ There is no information in the interface regarding what are required fields and what is range of values they expect. It would have been better if interface provide this information.


## 2. Functional testing

**Test 1 - Submitting empty form**
+ Description: Submit form without specifying any field or without specifying some fields.
+ Outcome: It shows the errors which is expected .

**Test 2 - Entering numeric fields**
+ Description: Submit form with customer name having numbers.
+ Outcome: It is accepted ,but should not be as it is an name field

**Test 3 - Entering Alphanumeric fields**
+ Description: Submit form with customer name having letters and numbers.
+ Outcome: It is accepted and working as expected 

## 3. Code: Routes
 + GET routes are used appropriately.

## 4. Code: Views
+ Yes template inheritance is used properly.
+ There is no separation of concern issues in view files.
+ Very clean blade code.