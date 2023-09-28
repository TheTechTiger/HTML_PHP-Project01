# Local Video Hosting with Custom JS Player

This project enables you to host videos locally using a custom JavaScript player.

## Requirements

### SQL Settings:
- **Server**: localhost:80
- **User**: root
- **Password**: (Leave it blank or set it to null)
- **Database**: webdev

## Installation and Setup

Follow these steps to set up and run the project:

1. **Download or Clone Repository**:
   - Download or clone this repository to your local machine.

2. **Create a "videos" Folder**:
   - Create a folder named "videos" within the project directory.

3. **Add Videos and Subtitles**:
   - Copy all your video files into the "videos" folder.
   - You can also include subtitles for the videos. Ensure the subtitle file names follow this format: `Video_name.vtt` (where "Video_name" should not include the file extension).

4. **Edit `movies.php` File**:
   - Open the `movies.php` file and add the names of your video files to it.

5. **Set Up the Database**:
   - Using PHPMyAdmin or your preferred MySQL management tool, create a new database named 'webdev'.

6. **Import Database Schema**:
   - Open your database in PHPMyAdmin.
   - In the "Import" tab, click "Choose a file" and select the 'webdev.sql' file provided in the project.
   - Click "Go" to import the database schema.

7. **User Registration and Login**:
   - After the database import is complete, open your web browser.
   - Go to the localhost address and click on the "Don't have an account?" option to create a new account.
   - After creating an account, return to the login page and enter your credentials to log in.

Now you can access and play your hosted videos using the custom JavaScript player.

Feel free to reach out if you encounter any issues or have further questions!
