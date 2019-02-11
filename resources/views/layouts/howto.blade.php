<!DOCTYPE html>
<html>
<head>
  <title>How to Use</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

  <!-- font -->
  <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

  <!-- style -->
  <style type="text/css">
    body{
      background-color: #edfeff;
      font-family: 'Raleway', sans-serif;
      color: black;
    }
    h1,p{
      font-weight: bold;
    }

    .row{
      padding-top: 20px;
      background-color: #f7feff;
      border-style: 1px solid;
      border-color: black;
      padding-bottom: 30px;
    }

    #note{
      font-size: 18px;
      padding-bottom: 5px;
      border-bottom: 0.1rem solid black;
    }

    #section2, #section3{
      padding-top: 10px;
    }

    #section4{
      padding-top: 50px;
    }

    h3{
      color: black;
      font-weight: bold;
    }
  </style>

</head>
<body>

  <h4 style="position: relative; margin-left: 20px; color: black; font-weight: bold;"><a href="{{ url('/') }}">Back</a></h4>

  <div class="container" style="padding-bottom: 20px;">
    <h1>Please read the instructions below!</h1>
    <p style="font-size: 18px;">Before using this application</p><br/>
    <div class="row">
      <div class="col-sm-12" style="">
        <div id="section1">
          <p>Requirements: </p>
          <p>PHP >= 5.4.0 and Composer</p>
          <p id="note">First of all, you need to create an application and create your access token in the <a target="_blank" rel="noopener noreferrer" href="https://developer.twitter.com/en/apps">Application Management.</a> </p>
        </div>
        <div id="section2">
          <h3>INSTALLATION</h3>
          <p>After being registered, you'll get 4 tokens that will be needed to use this application. Just follow the instructions below:</p>
          <p>1. In the directory, there is a .env.example file, copy the contents in the file, then save with the name ".env" (without " ")</p>
          <p>2. Create a database first, then in the .env file in the database settings section (DB_DATABASE, DB_USERNAME, DB_PASSWORD, etc.), adjust the content with your database</p>
          <p>3. Run the <code>composer update</code> command at the command prompt or git bash to get depedencies in this application</p>
          <p>4. Run the <code>php artisan vendor:publish --provider="Thujohn\Twitter\TwitterServiceProvider"</code></p>
          <p>5. Still in the .env file, add the 4 lines below with the token according to yours
          </p>
              <p><code>TWITTER_CONSUMER_KEY= </code></p>
              <p><code>TWITTER_CONSUMER_SECRET= </code></p>
              <p><code>TWITTER_ACCESS_TOKEN= </code></p>
              <p><code>TWITTER_ACCESS_TOKEN_SECRET= </code></p>
          <p>6. Run the <code>php artisan migrate</code> command to create tables that will be used as storage of crawling data</p>
          <p style="font-size: 17px;">Note: when using the Laravel framework, you only enter the database (MySQL etc.) when creating the database. To create/modify tables and columns, use the <code>php artisan</code> command. For complete information, please read at <a target="_blank" rel="noopener noreferrer" href="https://laravel.com/docs/5.5/migrations">Laravel Migrations Documentation</a></p>
        </div>
        <div id="section3">
          <h3>APPLICATION USAGE</h3>
          <p>1. In CMD or Git bash, go to this application root directory, then type <code>php artisan serve</code>. After that a url for this application will appear. Just copy that url to your web browser</p>
          <p>2. FINALLY, this application ready to use!!</p>
          <br/>
          <p style="font-size: 17px;">If you want to learn more about Laravel, please read the Laravel documentation <a target="_blank" rel="noopener noreferrer" href="https://laravel.com/docs">here</a></p>
        </div>
        <div id="section4">
          <p style="font-size: 17px;">Thank you for using this application: D</p>
          <p style="font-size: 17px;">If you like this application, please give a star on my repository <a target="_blank" rel="noopener noreferrer" href="https://github.com/farezho/twitter_crawler">here</a></p>
          <p style="font-size: 17px;">Let's collaborate to make this application much better!! xoxo</p>
        </div>
      </div>
    </div>
    <h3 style="text-align: center; font-size: 15px;">
      <strong> &copy; Copyright Farezho. All Rights Reserved | </strong>
      <strong> Powered by <a target="_blank" rel="noopener noreferrer" href="https://developer.twitter.com/en/docs/api-reference-index">Twitter API</a>
       & <a target="_blank" rel="noopener noreferrer" href="https://github.com/thujohn/twitter">Thujohn</a>
      </strong>
    </h3>
  </div>

</body>
</html>