 import java.sql.Connection;  
 import java.sql.DriverManager;  
 import java.sql.ResultSet;  
 import java.sql.Statement;  

public class ConnectMSSQL {  
    public Connection connection;
     public void connectDB(){  
         try {  
             Class.forName("com.microsoft.sqlserver.jdbc.SQLServerDriver");  
             connection = DriverManager  
                     .getConnection(  
                             "jdbc:sqlserver://localhost:1433;databaseName=project;selectMethod=cursor","sa", "123456");  
   
             System.out.println("DATABASE NAME IS:"  
                     + connection.getMetaData().getDatabaseProductName());  
             Statement statement = connection.createStatement();  
             /*ResultSet resultSet = statement  
                     .executeQuery("SELECT St_Name FROM STUDENT");  
             while (resultSet.next()) {  
                 System.out.println("Customer NAME:"  
                         + resultSet.getString("St_Name"));  
             }  */
         } catch (Exception e) {  
             e.printStackTrace();  
         }  
     } 
     
      

 }  