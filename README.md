
## What I've completed:

(Scroll down to the very bottom of this README to see some screen captures of the end-product)

**Requirements:**
- [x] Must be completed using Twill.io 
- [x] Clients can create, update, and delete new tasks on the backend.
- [x] A task consists of a title and an image.
- [x] Task's title is translatable using English & Māori languages.
- [ ] Visitors can search the task's title on the website (respective to their chosen language). 
- [x] Include Readme. Use any packages
- [x] Push to git & share repo link

## Progress on incomplete item(s):

1. I have tried using livewire on a separate repo to create a searchbar (should have created another branch here...). I can get the searchbar to work but it's somewhat buggy, that is, it messes up when switching between localizations (EN | MI)

2. I am having an issue with uploading files greater than 1MB. I don't know if this is an issue with twill configs or Homestead (nginx|apache configs)? 

3. The Settings module in the backend Dashboard doesn't do anything (there is no module for it).

## Instructions

I've used Homestead to develop this application, so you'll need to run the app locally using Homestead (vagrant).

If you don't have homestead set up, you'll need to refer to the docs: https://laravel.com/docs/9.x/homestead#installation-and-setup .    
Setup is fairly simple, and should only take a couple of minutes.

Once you've cloned this repo, you'll need to:

1. `cd` into the cloned repo.

2. install composer using
   ```
   composer install
   ```

3. create a homestead config. file using
   ```
   php vendor/bin/homestead make
   ```

4. edit the `.env` file to configure the APP_URL(s) if you're planning on using some other hostname besides 'homestead.test' .
   If you're not sure on what to do for this step then see: https://laravel.com/docs/9.x/homestead#hostname-resolution 

5. start the virtual machine using 
   ```
   vagrant up
   ```

6. run migrations using
    ```
    php artisan migrate
    ```

7. create an admin user account to login to the back end
    ```
    php artisan twill:superadmin
    ```
    
**For your convenience, here are the task names used in the example:**
- Sweeping and mopping the floor    |    Te horoi me te horoi i te papa
- Washing dishes and kitchenware    |    Te horoi rīhi me ngā taputapu kīhini
- Doing laundry washing    |    Te horoi horoi


    
 ## Task list in Māori language
<img src="https://github.com/notmalan/technical/blob/main/public/assets/screen_captures/tasks_mi.png" width="750" height="500">

## Task list in English language
<img src="https://github.com/notmalan/technical/blob/main/public/assets/screen_captures/tasks_en.png" width="750" height="500">

## Task Dashboard (Backend)
<img src="https://github.com/notmalan/technical/blob/main/public/assets/screen_captures/tasks.png" width="750" height="500">

## Task Edit Form
<img src="https://github.com/notmalan/technical/blob/main/public/assets/screen_captures/edit_task.png" width="750" height="500">


## Resources used:

- 7 Minute CMS by Twill.io https://www.youtube.com/watch?v=qNGAf9VA_TY&t=144s
- Twill Command Line Tutorial https://www.youtube.com/watch?v=W4ECg9ojLmQ
- LaravelLocalization docs:  https://github.com/mcamara/laravel-localization/blob/master/README.md
- Building a multilingual site with Twill and Laravel Localization: https://twill.io/docs/guides/building_a_multilingual_site_with_twill_and_laravel_localization.html#where-to-go-from-here
- & a lot of StackOverflow 





