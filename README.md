# bank-teller-api
 ## Table of Contents
 1. [User](#User)
 1. [Deposit](#Deposit)
 1. [Withdraw](#Withdraw)
 1. [Check balance](#Check-balance)
 1. [Change password](#Change-password)
 
### Expected Output
## User
 GET `/bank-teller-api/api/user`
##### Response:
 ```javascript
{
     "Name": "Mark"
     "Password": "1231231"
}
```
## Deposit 
   PUT  `/bank-teller-api/api/savings/deposit`
##### Response: 
```javascript
{
    "message":"Success",
    "balance"="#####"
    "status": "200",
}
{
   "message":"Wrong input",
	"status": "406",
}
 ```
NOTE : Negative inputs are invalid and will output an error.
##### Response:
{
     "message":"Invalid Request",
	"status": "400"
}
## Withdraw
 PUT `/bank-teller-api/api/savings/deposit`   
##### Response: 
```javascript
{
    "message":"Success",
	"status": "200",
}
{
   "message":"Wrong input",
	"status": "406",
}
 ```
 NOTE: Withdraw value must not exceed the current balance or it will output ERROR:400.
##### Response:
```javascript
{
     "message":"Not enough balance",
	"status": "400"
}
```
## Check balance
 GET `/bank-teller-api/api/user`

##### Response:
 ```javascript
{
     "Name": "Mark"
     "Balance": "20000"
}
```
## Change password
 POST `/bank-teller-api/api/user/password/change`
 
 #### Requirements:
 - Must be 4-12 characters long.
 
##### Response: 
```javascript
{
    "message":"Success",
	"status": "200",
}
{
   "message":"Password must only be 4-12 character long.",
	"status": "406",
}
```
 - Must not be same as before.
##### Response 
```javascript
{
    "message":"Success",
	"status": "200",
}
{
   "message":"New password must not be the same value to the current.",
	"status": "406",
}
```


   
