# bank-teller-api
### Expected Output

1. ##### User
 GET /bank-teller-api/api/user
 ##### Response:
 ```javascript
    {
     "Name": "Mark"
     "Password": "1231231"
    }
```
1. ##### Deposit 
    PUT /bank-teller-api/api/savings/deposit
   ##### Response: 
```javascript
   {
    "message":"Success",
	status": 200,
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

1. ##### Withdraw
    PUT /bank-teller-api/api/savings/deposit   
    ##### Response: 
```javascript
   {
    "message":"Success",
	status": 200,
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
     "message":"Invalid Request",
	"status": "400"
 }
```
1. ##### Balance
 GET /bank-teller-api/api/user

 ##### Response:
 ```javascript
    {
     "Name": "Mark"
     "Balance": "20000"
    }
```
1. ##### Change password
 POST /bank-teller-api/api/user/password/change
##### Response: 
```javascript
   {
    "message":"Success",
	"status": "200",
   }
   {
   "message":"Not acceptable",
	"status": "406",
   }
```

   
