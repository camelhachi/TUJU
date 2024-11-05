![image](https://github.com/user-attachments/assets/8dbe9a97-bfe1-4c90-8413-d2497ead666b)


# Tuju Hotel Booking Web App

**Tuju** is a web application designed to streamline and systematize the booking and management process for **Hotel Tuju** in Jakarta. Built with **Laravel** and **PHP**, this app enhances user experience and simplifies hotel operations by providing a user-friendly booking platform and an admin dashboard for hotel staff.

## Features

- **Room Booking**: Users can browse available rooms, view room details, and book rooms.
- **User Authentication**: Secure registration and login for customers to manage their bookings.
- **Admin Dashboard**: Allows hotel staff to manage room availability, bookings, and user accounts.
- **Room Management**: Admins can update room details, set prices, and manage room availability.
- **Booking Management**: Provides staff with tools to manage reservations, check-ins, and check-outs.

## Technologies Used

- **Backend**: Laravel (PHP framework)
- **Frontend**: HTML, CSS, JavaScript
- **Database**: MySQL

## Installation

1. **Clone the Repository**:
   ```bash
   git clone https://github.com/camelhachi/TUJU.git
   ```

2. **Navigate to the Project Directory**:
   ```bash
   cd TUJU
   ```

3. **Install Dependencies**:
   ```bash
   composer install
   npm install
   ```

4. **Set Up Environment Variables**:
   - Copy the `.env.example` file to `.env`:
     ```bash
     cp .env.example .env
     ```
   - Update the `.env` file with your MySQL database credentials:
     ```
     DB_DATABASE=tuju_hotel
     DB_USERNAME=your_username
     DB_PASSWORD=your_password
     ```

5. **Generate Application Key**:
   ```bash
   php artisan key:generate
   ```

6. **Run Database Migrations**:
   ```bash
   php artisan migrate
   ```

7. **Seed the Database** (optional, if you have seeders set up):
   ```bash
   php artisan db:seed
   ```

8. **Run the Development Server**:
   ```bash
   php artisan serve
   ```

   The app will be available at `http://localhost:8000`.

## Usage

- **Customers**: Can browse and book available rooms, view booking history, and manage their profile.
- **Admins**: Use the dashboard to manage rooms, update availability, and oversee booking activity.

## Contributing

Feel free to fork this repository, create a feature branch, and submit pull requests for any improvements or bug fixes.

