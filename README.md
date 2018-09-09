# Learning Pocket
Learing Pocket is a simple Learning Management System (LMS) for people lacking of regular connectivity.
It consists of a website and a mobile app. The website is aimed at teachers and administrators, the mobile app is aimed at students.

Teachers and administrator (website): teachers can (1) feed content to the app, (2) check quizzes results submitted 
by the students, and (3) create users (students). Administrator can do the previous actions plus (4) create users (both 
students and teachers). 

Students (mobile app): students are able to interact and engage with the app offline (basically see content and submit quizes).
Changes then sync when they’re back online. At this stage, the only interaction will be through quizzes. For example, a student 
might submit a quiz and the app “saves” the results, pushing them when the user has connectivity.

This repository is about the website for teachers.

## Context
Even though most of the people from developing countries don't have regular access to internet, the penetration of smartphones 
is taking giant steps despite data being certainly expensive. This presents a landscape where smartphones can be an excellent 
tool for learning if light content and offline mode are considered.

Learning Pocket is based on the app iniCusco, an offline app (100% running on a mobile device) that has been developed for 
rural schools in the Peruvian highlands. At the moment, approx. 100 students are using it. Learning Pocket emerges from 
trying to have an improved version of iniCusco, including content management for teachers, creation of users, and refreshing option
for students when there is connectivity. Besides, this model allows the scalability and sutainability of the project.

## Functionalities
### Website aimed at TEACHERS (this repository)
* Course manager: creation of courses, which includes text, images and quizzes.
* User manager: creation of users. Two levels: admin and teacher. An admin can create teachers and students, a teacher can create students.
* Log in
### App aimed at STUDENTS (not included in this repository)
* View courses and take quizzes inside
* Log in
* Sync button (used when there is connectivity)
* Framework proposed: Onsen-UI
