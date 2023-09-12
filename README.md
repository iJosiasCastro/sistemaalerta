<h1 align="center">
  Sistema Alerta - Patient Alert System
</h1>

![demo](https://github.com/iJosiasCastro/sistemaalerta/blob/main/demo/screenshot.png?raw=true)
![demo](https://github.com/iJosiasCastro/sistemaalerta/blob/main/demo/screenshot_2.png?raw=true)
![demo](https://github.com/iJosiasCastro/sistemaalerta/blob/main/demo/screenshot_3.png?raw=true)

## Introduction

This system was developed for presentation at the 2st 2021 Technical Computing Olympiad in the Buenos Aires province. The primary focus of this system is to function as a patient calling and alert system. The objective is to enable patients to send a call request to the system using a device connected to Wi-Fi, a phone, or a button. Subsequently, the system displays their call on a screen and emits sounds to alert the healthcare providers for timely assistance. 

## Features

- Patient Management: The system allows the addition of patients, nurses, areas, and authorized users.
- Assignment: Each patient can be assigned to one or multiple nurses and an area. This enables the display of patient calls on the screen along with their respective areas.
- Real-time Alerts: Calls are displayed automatically whenever a patient sends a request. Active patients can make calls as needed.

## Technologies Used

The website is developed using Laravel, a popular PHP framework known for its robustness and scalability.

## Getting Started

To run this Laravel project, follow these steps:

1. Clone the repository to your local machine.
2. Configure your environment variables, including database credentials and email settings, in the `.env` file.
3. Install project dependencies using Composer:

   ```bash
   composer install
   ```

4. Generate a new application key:

   ```bash
   php artisan key:generate
   ```

5. Run database migrations to create the required tables:

   ```bash
   php artisan migrate
   ```

6. Serve the application locally:

   ```bash
   php artisan serve
   ```

You can access the website in your web browser at `http://localhost:8000`.

Feel free to explore the website and its features, and don't forget to refer to the Laravel documentation for any additional configuration or customization needs.
