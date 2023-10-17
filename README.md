<!-- TABLE OF CONTENTS -->

# 📗 Table of Contents

- [📖 About the Project](#about-project)
  - [🛠 Built With](#built-with)
    - [Tech Stack](#tech-stack)
    - [Key Features](#key-features)
  - [🚀 Live Demo](#live-demo)
- [💻 Getting Started](#getting-started)
  - [Prerequisites](#prerequisites)
  - [Installation](#installation)
  - [Setup](#setup)
  - [Usage](#usage)
  - [Deployment](#deployment)
- [👥 Authors](#authors)
- [🔭 Future Features](#future-features)
- [🤝 Contributing](#contributing)
- [⭐️ Show your support](#support)
- [📝 License](#license)

<!-- PROJECT DESCRIPTION -->

# 📖 [Hospital Booking App] <a name="about-project"></a>

**[Hospital Booking App]** is a booking app for hospital staff members to create appointments for patients to book an appointemnt for a specific day.

## 🛠 Built With <a name="built-with"></a>

### Tech Stack <a name="tech-stack"></a>

- PHP
- XAMPP
- CSS
- BOOTSTRAP
- MYSQL

<!-- Features -->

### Key Features <a name="key-features"></a>

- **[Admins]** - can edit and delete records for hospital staff members and patients.
- **[Staff Members]** - can create booking appointments
- **[Patients]** - can create book appointments

<p align="right">(<a href="#readme-top">back to top</a>)</p>

<!-- LIVE DEMO -->

## 🚀 Live Demo <a name="live-demo"></a>

- [Not Available]()

<p align="right">(<a href="#readme-top">back to top</a>)</p>

<!-- GETTING STARTED -->

## 💻 Getting Started <a name="getting-started"></a>

To get a local copy up and running, follow these steps.

### Prerequisites

In order to run this project you need:

- XAMPP (version X.X.X or higher) - [Download](https://www.apachefriends.org/index.html)
- PHP (version X.X.X or higher) - [Download](https://www.php.net/downloads.php)
- MySQL (version X.X.X or higher) - [Download](https://www.mysql.com/downloads/)

### Installation

- Clone or download the project repository.
- Place the project files in the appropriate XAMPP web server directory (e.g., htdocs).
- Launch XAMPP and start the Apache and MySQL services.

### Setup

- Open your web browser and navigate to http://localhost/phpmyadmin.
- Log in to phpMyAdmin using your MySQL credentials.
- Create a new database for your project.
- Import the database schema and initial data from the provided SQL file (database.sql).
- Update the database connection details in the PHP files if necessary (config.php, db.php, etc.).

### Usage

Use the `connect.php` file to establish a connection to the database. Example:

```sh
  <?php
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
    $con = mysqli_connect('localhost', 'root', '', 'home_based_care');
  ?>
```

<p align="right">(<a href="#readme-top">back to top</a>)</p>

<!-- AUTHORS -->

## 👥 Author <a name="authors"></a>

👤 **Author**

- [Github](https://github.com/altontonn/)
- [Twitter](https://twitter.com/AlumasaNewton)
- Linkedin: [newton-alumasa](https://www.linkedin.com/in/newton-alumasa/)

<p align="right">(<a href="#readme-top">back to top</a>)</p>

<!-- FUTURE FEATURES -->

## 🔭 Future Features <a name="future-features"></a>

- **Work on booking appointment for patients**
- **Work on Hospital root Landing page**

<p align="right">(<a href="#readme-top">back to top</a>)</p>

<!-- CONTRIBUTING -->

## 🤝 Contributing <a name="contributing"></a>

Contributions, issues, and feature requests are welcome!

Feel free to check the [issues page](https://github.com/altontonn/Hospital-App/issues/).

<p align="right">(<a href="#readme-top">back to top</a>)</p>

<!-- SUPPORT -->

## ⭐️ Show your support <a name="support"></a>

Give a ⭐️ if you like this project and how I managed to build it!

<p align="right">(<a href="#readme-top">back to top</a>)</p>

<!-- LICENSE -->

## 📝 License <a name="license"></a>

This project is [MIT](https://github.com/altontonn/Hospital-App/blob/master/LICENSE) licensed.

<p align="right">(<a href="#readme-top">back to top</a>)</p>
