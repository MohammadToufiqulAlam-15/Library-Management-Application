# Library Management Application 
This is a simple library management system. Here anyone can create, update, and delete new authors, publishers, categories, books, booklists, and reports.
# Key Features of Library Management Application 
1.User Authentication:
- Login and session management for secure access (LoginController, Laravel auth).
- Role-based access (admin/manager capabilities).
  
- Book Management:
- Add, edit, view, and delete books (BookController, book model).
- Manage book metadata like title, author, publisher, category, and stock.
  
- Student Management:
- Add, edit, view, and delete student profiles (StudentController, student model).
- Track which students borrowed which books.
  
- Author and Publisher Management:
- CRUD operations for authors (AutherController, auther model) and publishers (PublisherController, publisher model).
  
- Book Issuing and Returning:
- Issue books to students (BookIssueController).
- Track due dates and book return status.
- View issued, returned, and overdue books.
  
- Categorization:
- Manage book categories (CategoryController).
- Assign books into different genres or sections.
  
- Reporting:
- Generate reports:
- Monthly reports.
- Date-wise reports.
- Non-returned books report (ReportsController).
  
- Settings Management:
- System settings can be updated dynamically (SettingsController, settings model).
  
- Dashboard:
- Admin dashboard displaying summaries like:
- Number of books.
- Number of students.
- Number of issued books (dashboardController).

- Password Reset:
- Forgot password and reset password functionalities (reset_password.blade.php).
  
- Validation and Authorization:
- Form request validations (StorebookRequest, etc.).
- Policy-based authorization (BookPolicy, StudentPolicy, etc.).
  
- Database Migration and Seeding:
- Fully set up with migration files for database schema.
- Seeder classes available for demo data (UserSeeder, BookSeeder, etc.).

- Clean UI with Blade Templates:
- Separate layouts (layouts/app.blade.php).
- Bootstrap-based frontend.
- Pagination using Laravel’s built-in system.
  
- Responsive Frontend:
- Mobile-friendly pages using Bootstrap.
- Clear navigation for Books, Students, Authors, Publishers, Reports, and Settings.

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
  
  ![LMA-1](https://github.com/user-attachments/assets/a8ab0776-38c3-4ae5-ae87-3aa9785089d7)

- Dashboard Page:
  
  ![LMA-2](https://github.com/user-attachments/assets/859e584d-bbc8-4672-a3d4-b47670d112c1)

- Author Page:
  
  ![LMA-3](https://github.com/user-attachments/assets/add292b4-db66-49d6-8f2d-33167e3444e3)
