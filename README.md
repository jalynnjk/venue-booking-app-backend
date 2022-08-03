## The Chapel -- Venue Booking Web Application API

## Project Description 
This is the backend for my venue booking web application, where the API requests are sent. The API is structured with restful architectural concepts in mind and the axios calls from the frontend are made asynchronously, with full CRUD functionality.

## Live Deployment
Supported routes include: '/api/booking_requests' and '/api/accepted_requests'
https://thechapel-backend.herokuapp.com/

## Frontend Repository
https://github.com/jalynnjk/venue-booker

## Technologies
The backend was built using Laravel (PHP) and composer, and deployed to Heroku. The database information is stored with Postgres SQL and I used to DBngin and TablePlus to manage my server and database. CRUD Routes were tested using Postman.

## Installation
In order to get/edit information with this API you can send axios calls from your frontend application. Otherwise, if you wish install this backend you can fork and clone this repository onto your local server.

## Next steps...
For my next steps I would like to add authorization where the owner must log-in in order to view and interact with the requests. I would also like to add the functionality where the application automatically sends an email to the user letting them know if their request has been accepted or declined.
