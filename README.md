# Project Name

## Setup Instructions

1. Clone the repository:
   ```bash
   git clone https://github.com/your/repository.git
   ```
   
2. Install dependencies:
   ```bash
   php composer install
   ```

3. Copy .env.example to .env and configure your environment variables

4. Run database migrations to set up the submissions table:
   ```bash
   php artisan migrate
   ```
   
5. Make sure the queue worker is running to process the queued jobs. Start the queue worker using:
    ```bash
   php artisan queue:work
    ```

## API Endpoint /submit
### Description
### Accepts a POST request with JSON payload to submit data.

- Accepts a POST request with JSON payload to submit data:
   ```bash
   POST /submit
  ```
- Request Body:
   ```json
   {
     "name": "John Doe",
     "email": "john.doe@example.com",
     "message": "This is a test message."
  }
  ```

### Responses
- 200 OK: Submission received and processing started.
- 422 Unprocessable Entity: Validation error (missing required fields).
- 500 Internal Server Error: Failed to process submission (server error).

#### Unit Testing
### Running Tests
- You can run unit tests using PHPUnit:

   ```bash
   php artisan test
   ``` 







