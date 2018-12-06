# Callenge

build a Laravel app that takes a post

This is the first ever Laravel app that I have built.

I chose this since it was something we spoke about so I wanted to see how quickly I could adopt it. It's not too hard but next time I would try a API only app as that would be easier I think.

The POST route is ```/products``` following rest
There is validations and json responses if it does not pass validations

I did remove csrf check from laravel - only because the setup for cors or a form would be more time.

NOTE: I am aware it is a serious security risk, I would never remove csrf tokens in a professional environment, this was my first app so I couldn't find appropriate documentation without doing some extensive research (which I will probably do later :D)

To start this app you will need to have your own .env config file as the directory where the local sqlite file is hosted

It does save to the database, I felt you want to see the code behind the app and not how it runs.

