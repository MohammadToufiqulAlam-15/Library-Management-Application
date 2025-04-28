#  Library management system 
This is a simple library management system. Here anyone can create, update, and delete new authors, publishers, categories, books, booklists, and reports.

# How to set up a project in localhost?
- Clone your project
- Go to the folder application using cd command on your cmd or terminal
- Run composer install on your cmd or terminal
- Run npm install or yarn install then run npm run dev or yarn dev
- Copy .env.example file to .env on the root folder. You can type copy .env.example .env if using command prompt Windows or cp .env.example .env if using terminal, Ubuntu
- Open your .env file and change the database name (DB_DATABASE) to whatever you have, username (DB_USERNAME)  field correspond to your configuration.
- Run php artisan key:generate
- Run php artisan migrate
- Run php artisan serve
- Go to http://localhost:8000/
- Login Page:
  
![login](https://github.com/zishan07cse/simple_library_management/assets/71685189/56d6d282-b97c-4719-b137-d2ca0b8b2339)
- Dashboard Page:
  
![dashboard](https://github.com/zishan07cse/simple_library_management/assets/71685189/7fa3cf16-9f00-4723-81f0-902653e3de8f)
- Author Page:
  
![author](https://github.com/zishan07cse/simple_library_management/assets/71685189/5415d682-2ac0-4512-ac13-e4948f0c5192)
