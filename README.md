##Facebook Login 1.9.x - 1.12.x


Original author of this plugin is  Anirup Dutta
https://github.com/anirupdutta/facebook_api


###Instruction
1. If you have any old version of the plugin, then first delete existing folder of facebook_connect.
2. Copy faceook_connect in mod folder and make sure plugin folder name is facebook_connect
3. Login with your admin account and activate facebook connect plugin
4. Now Click on Setting and enter your facebook application api key and secret code
5. You can set other setting like positng to facebook, allow user to register even if manual registration is disabled etc.
6. Now you can see facebook login button on login page


If Facebook user is already registered on your network then this plugin will associate site account with facebook account 
otherwise this plugin will auto register the facebook user and send login details to user email address.

###Stable Release
- 1.9.2

Note: 1.9.3 is still under development.

###Changes:

**ver 1.9.3 (Improvement 03)**
- Fixed facebook_connect_post_status function

**ver 1.9.3 (Improvement 02)**
- Updated SDK version to 2.5
- Updated source code for elgg data path from $CONFIG to elgg_get_data_path() (Old source code was not working in 1.12.5)
- Commented out facebook_connect_post_status() - It is generating facebook authorization error (Will be fix in future release)

**ver 1.9.3 (Improvement 01)**
- Attempt to fix facebook SDK Error (Changed EOL to Dos\Windows and File Encode to UTF-8 w/o BOM)
- Added Facebook Profile link of user in profile page.

**ver 1.9.3**
- Attempt to fix facebook SDK Error: Cross-site request forgery validation failed. The "state" param from the URL and session do not match.
- Added German Language (Contributed by: lweddewer - https://github.com/lweddewer)

**ver 1.9.2**
- Code fixed; Missing semicolon
- Code Cleanup

**ver 1.9.1**
- Publish Post to facebook when a new account is created.

**ver 1.9**
- Works with the new Facebook SDK (PHP)
- Create new profile for user whose email id does not exist.
- Login to the profile whose email ID already exist.
- Link the facebook profile to elgg profile where there is a match of email ID.

###To Do List
- Fix facebook SDK Error

#####Note:
Facebook posting requires "publish_actions" to be approved in your facebook application. Do not enable facebook posting until and unless you have "publish_actions" approved before enabling it. If not, then the plugin would genereate a redirect loop error as it won't be able to get "publish_actions" as approved API when pulling user data at the time of login/registration.
