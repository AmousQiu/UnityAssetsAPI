# UnityAssetsAPI
----------

>  A general Restful API in PHP woks along with MySQL database as a management system to facilitate uploading, downloading and browsing of various game related assets.   
 
# Web Interface
- Server Home Page    

![home page screenshot](https://github.com/AmousQiu/UnityAssetsAPI/blob/master/Screenshots/ServerHomePage.PNG)

- Photo Server Home Page  

![home page screenshot](https://github.com/AmousQiu/UnityAssetsAPI/blob/master/Screenshots/PhotoServerHomepage.PNG)

- Music Server Home Page    

![home page screenshot](https://github.com/AmousQiu/UnityAssetsAPI/blob/master/Screenshots/MusicServerHomepage.PNG)

## How to set it up on your server?  
- #### You would need to set up these stuff on your server
      - Apache
      - php
      - phpMyadmin
      - mysql    
<br>
   
- #### Now download the file folder
 
- #### Upload the whole folder to your target server 
 
  
  - Linux   
  `scp  –r  Desktop/UnityAPI/ zqiu@bluenose.cs.dal.ca:~/public_html`  
    Local Repository:  `Desktop/UnityAPI/`   
    `//change this to your folder`   
    Server Repository:  `zqiu@bluenose.cs.dal.ca:~/public_html`   
    `//change this to your own`
  - Windows  
      > I'm not suggesting using windows bro.      
        But if you insist, just copy and paste this folder to your target place
   
## How it works?         
![](https://github.com/AmousQiu/UnityAssetsAPI/blob/master/Screenshots/Upload%20Diagram.png)

![](https://github.com/AmousQiu/UnityAssetsAPI/blob/master/Screenshots/Download%20Diagram.png)

[ :tiger2: Detailed comments in imageServer code](https://github.com/AmousQiu/UnityAssetsAPI/tree/master/imageServer)

## How should I use it for other kind of files? 

- ### InsertData.php
--- 
  ```php
  //change this to your servername for phpMyadmin  
   $servername = null;  
  ```
  ```php
  //change this to your username for phpMyAdmin  
  $username = "root";
  ```
  
  ```php
  //change this to your password for phpMyAdmin  
  $password = null;
  ```

  ```php
  //change this to your database name   
  $dbName = "Server";
  ``` 

  ```php
  //change 'Table' and 'Name' according to your database  
  $sql = "select * from Table where Name='" . $FileName . "'";
  ```

```php
  //change 'Table' and 'Name' according to your database  
  $sql = "INSERT INTO Table (Name) VALUES ('" . $FileName . "')";  
```
---  
  
<br>
<br>    

- ### itemsData.php
---
 
  //change this to your serverName for phpMyadmin  
  ```php 
  $servername = null;
  ```  

  //change this to your username for phpMyAdmin  
  ```php
  $username = "root";
  ```  
  ```php
  //change this to your password for phpMyAdmin   
  $password = null;
  ```   

  ```php
  //change this to your database name   
  $dbName = "Server";
  ``` 

  //change 'Table' according to your database  
  `  $sql="SELECT * FROM 'Table'"; `

  //change 'Name' according to your database  
  ` echo "FileName:".$row ['Name'].";";  `

---  
<br>
<br>

- ### UnityUpload.php
---
//The only thing you need to do is changing ".png" to the file type you want to upload    
```php 
$myFile = $file_path.$_REQUEST['Name'].".png";
```  
   
---  


># Now all the server part are all done!
># Time to learn how to apply them in Unity
  - ## Audio Recorder Tutorial
  - ## Doodle noodle Tutorial




