<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Version details.
 *
 * @package    local
 * @subpackage moodlemobileapp
 * @copyright  2014 Juan Leyva <juanleyvadelgado@gmail.com>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$string['appstoredescription'] = 'NOTE: This official Moodle Mobile app will ONLY work with Moodle sites that have been set up to allow it.  Please talk to your Moodle administrator if you have any problems connecting.

If your Moodle site has been configured correctly, you can use this app to:

- browse the content of your courses, even when offline
- receive instant notifications of messages and other events
- quickly find and contact other people in your courses
- upload images, audio, videos and other files from your mobile device
- view your course grades
- and more!

Please see http://docs.moodle.org/en/Mobile_app for all the latest information.

We’d really appreciate any good reviews about the functionality so far, and your suggestions on what else you want this app to do!

The app requires the following permissions:
Record audio - For recording audio to upload to Moodle
Read and modify the contents of your SD card - Contents are downloaded to the SD Card so you can see them offline
Network access - To be able to connect with your Moodle site and check if you are connected or not to switch to offline mode
Run at startup - So you receive local notifications even when the app is running in the background
Prevent phone from sleeping - So you can receive push notifications anytime';
$string['mm.contentlinks.chooseaccount'] = 'Choose account';
$string['mm.contentlinks.chooseaccounttoopenlink'] = 'Choose an account to open the link with.';
$string['mm.contentlinks.confirmurlothersite'] = 'This link belongs to another site. Do you want to open it?';
$string['mm.contentlinks.errornoactions'] = 'Couldn\'t find an action to perform with this link.';
$string['mm.contentlinks.errornosites'] = 'Couldn\'t find any site to handle this link.';
$string['mm.core.android'] = 'Android';
$string['mm.core.cannotconnect'] = 'Cannot connect: Verify that you have typed correctly the URL and that your site uses Moodle 2.4 or later.';
$string['mm.core.cannotdownloadfiles'] = 'File downloading is disabled in your Mobile service. Please, contact your site administrator.';
$string['mm.core.clearsearch'] = 'Clear search';
$string['mm.core.clicktoseefull'] = 'Click to see full contents.';
$string['mm.core.close'] = 'Close';
$string['mm.core.completion-alt-auto-fail'] = 'Completed: {{$a}} (did not achieve pass grade)';
$string['mm.core.completion-alt-auto-n'] = 'Not completed: {{$a}}';
$string['mm.core.completion-alt-auto-pass'] = 'Completed: {{$a}} (achieved pass grade)';
$string['mm.core.completion-alt-auto-y'] = 'Completed: {{$a}}';
$string['mm.core.completion-alt-manual-n'] = 'Not completed: {{$a}}. Select to mark as complete.';
$string['mm.core.completion-alt-manual-y'] = 'Completed: {{$a}}. Select to mark as not complete.';
$string['mm.core.confirmopeninbrowser'] = 'Do you want to open it in browser?';
$string['mm.core.deleting'] = 'Deleting';
$string['mm.core.dfdayweekmonth'] = 'ddd, D MMM';
$string['mm.core.dflastweekdate'] = 'ddd';
$string['mm.core.dfmediumdate'] = 'LLL';
$string['mm.core.dftimedate'] = 'h[:]mm A';
$string['mm.core.downloading'] = 'Downloading';
$string['mm.core.elementseparator'] = ',';
$string['mm.core.errorchangecompletion'] = 'An error occurred while changing the completion status. Please try again.';
$string['mm.core.errordownloading'] = 'Error downloading file.';
$string['mm.core.errordownloadingsomefiles'] = 'Error downloading module files. Some files might be missing.';
$string['mm.core.errorinvalidresponse'] = 'Invalid response received. Please contact your Moodle site administrator if the error persists.';
$string['mm.core.erroropenfilenoapp'] = 'Error opening the file: no app found to open this kind of file.';
$string['mm.core.erroropenfilenoextension'] = 'Error opening the file: the file doesn\'t have extension.';
$string['mm.core.erroropenpopup'] = 'This activity is trying to open a popup. This is not supported in this app.';
$string['mm.core.humanreadablesize'] = '{{size}} {{unit}}';
$string['mm.core.image'] = 'Image';
$string['mm.core.imageviewer'] = 'Image viewer';
$string['mm.core.info'] = 'Info';
$string['mm.core.ios'] = 'iOS';
$string['mm.core.lastsync'] = 'Last synchronization';
$string['mm.core.loading'] = 'Loading';
$string['mm.core.lostconnection'] = 'Your authentication token is invalid or has expired, you will have to reconnect to the site.';
$string['mm.core.mod_assign'] = 'Assignment';
$string['mm.core.mod_assignment'] = 'Assignment';
$string['mm.core.mod_book'] = 'Book';
$string['mm.core.mod_chat'] = 'Chat';
$string['mm.core.mod_choice'] = 'Choice';
$string['mm.core.mod_data'] = 'Database';
$string['mm.core.mod_database'] = 'Database';
$string['mm.core.mod_external-tool'] = 'External tool';
$string['mm.core.mod_feedback'] = 'Feedback';
$string['mm.core.mod_file'] = 'File';
$string['mm.core.mod_folder'] = 'Folder';
$string['mm.core.mod_forum'] = 'Forum';
$string['mm.core.mod_glossary'] = 'Glossary';
$string['mm.core.mod_ims'] = 'IMS content package';
$string['mm.core.mod_imscp'] = 'IMS content package';
$string['mm.core.mod_label'] = 'Label';
$string['mm.core.mod_lesson'] = 'Lesson';
$string['mm.core.mod_lti'] = 'External tool';
$string['mm.core.mod_page'] = 'Page';
$string['mm.core.mod_quiz'] = 'Quiz';
$string['mm.core.mod_resource'] = 'Resource';
$string['mm.core.mod_scorm'] = 'SCORM package';
$string['mm.core.mod_survey'] = 'Survey';
$string['mm.core.mod_url'] = 'URL';
$string['mm.core.mod_wiki'] = 'Wiki';
$string['mm.core.mod_workshop'] = 'Workshop';
$string['mm.core.mygroups'] = 'My groups';
$string['mm.core.networkerrormsg'] = 'Network not enabled or not working.';
$string['mm.core.notapplicable'] = 'n/a';
$string['mm.core.offline'] = 'Offline';
$string['mm.core.online'] = 'Online';
$string['mm.core.openfullimage'] = 'Click here to display the image at full size';
$string['mm.core.openinbrowser'] = 'Open in browser';
$string['mm.core.othergroups'] = 'Other groups';
$string['mm.core.percentagenumber'] = '{{$a}}%';
$string['mm.core.pulltorefresh'] = 'Pull to refresh';
$string['mm.core.requireduserdatamissing'] = 'This user lacks some required profile data. Please, fill this data in your Moodle and try again.<br>{{$a}}';
$string['mm.core.searching'] = 'Searching';
$string['mm.core.sending'] = 'Sending';
$string['mm.core.serverconnection'] = 'Error connecting to the server';
$string['mm.core.sizetb'] = 'TB';
$string['mm.core.success'] = 'Success!';
$string['mm.core.tablet'] = 'Tablet';
$string['mm.core.twoparagraphs'] = '{{p1}}<br><br>{{p2}}';
$string['mm.core.unexpectederror'] = 'Unexepected error. Please close and reopen the application to try again';
$string['mm.core.unknown'] = 'Unknown';
$string['mm.core.unzipping'] = 'Unzipping';
$string['mm.core.windowsphone'] = 'Windows Phone';
$string['mm.core.wsfunctionnotavailable'] = 'The webservice function is not available.';
$string['mm.course.activitynotyetviewable'] = 'This activity or resource is not yet viewable in the app.';
$string['mm.course.activitynotyetviewablegothere'] = 'This activity or resource is not yet viewable in the app, click the button below to access it from the site.';
$string['mm.course.allsections'] = 'All sections';
$string['mm.course.confirmdownload'] = 'You are about to download {{size}}. Are you sure you want to continue?';
$string['mm.course.confirmdownloadsection'] = 'You are about to download {{size}}. Are you sure you want to continue?';
$string['mm.course.confirmdownloadunknownsize'] = 'We were unable to calculate the size of the download. Are you sure you want to download?';
$string['mm.course.contents'] = 'Contents';
$string['mm.course.couldnotloadsectioncontent'] = 'Could not load the section content, please try again later.';
$string['mm.course.couldnotloadsections'] = 'Could not load the sections, please try again later.';
$string['mm.course.errordownloadingsection'] = 'Error downloading section.';
$string['mm.course.errorgetmodule'] = 'Error getting module data.';
$string['mm.course.gotothesite'] = 'Go to the site';
$string['mm.course.nocontentavailable'] = 'No content available at the moment.';
$string['mm.course.showall'] = 'Show all';
$string['mm.course.whoops'] = 'Whoops!';
$string['mm.courses.confirmselfenrol'] = 'Are you sure you want to enrol yourself in this course?';
$string['mm.courses.enrolme'] = 'Enrol me';
$string['mm.courses.errorloadcourses'] = 'An error occurred while loading courses.';
$string['mm.courses.errorsearching'] = 'An error occurred while searching.';
$string['mm.courses.errorselfenrol'] = 'An error occurred while self enroling.';
$string['mm.courses.filter'] = 'Filter';
$string['mm.courses.filtermycourses'] = 'Filter my courses';
$string['mm.courses.frontpage'] = 'Front page';
$string['mm.courses.mycourses'] = 'My courses';
$string['mm.courses.nocourses'] = 'No course information to show.';
$string['mm.courses.nosearchresults'] = 'There were no results from your search';
$string['mm.courses.notenroled'] = 'You are not enrolled in this course';
$string['mm.courses.notenrollable'] = 'You can not enrol yourself in this course.';
$string['mm.courses.password'] = 'Enrolment key';
$string['mm.courses.search'] = 'Search';
$string['mm.courses.searchcourses'] = 'Search courses';
$string['mm.courses.searchcoursesadvice'] = 'You can use the search courses button to access as guest or enrol yourself in courses that allow it.';
$string['mm.courses.selfenrolment'] = 'Self-enrolment';
$string['mm.courses.totalcoursesearchresults'] = 'Total courses: {{$a}}';
$string['mm.login.authenticating'] = 'Authenticating';
$string['mm.login.cancel'] = 'Cancel';
$string['mm.login.cannotdownloadfiles'] = 'File downloading is disabled in your Mobile service, the app can\'t work with this setting disabled. Please, contact your site administrator.';
$string['mm.login.confirmdeletesite'] = 'Are you sure you want to delete the site {{sitename}}?';
$string['mm.login.connect'] = 'Connect!';
$string['mm.login.connecttomoodle'] = 'Connect to Moodle';
$string['mm.login.credentials'] = 'Credentials';
$string['mm.login.credentialsdescription'] = 'Please provide your username and password to login on';
$string['mm.login.erroraccesscontrolalloworigin'] = 'The Cross-Origin call you\'re trying to perform has been rejected. Please check https://docs.moodle.org/dev/Moodle_Mobile_development_using_Chrome_or_Chromium';
$string['mm.login.errordeletesite'] = 'An error occurred while deleting this site. Please try again.';
$string['mm.login.errorupdatesite'] = 'An error ocurred while updating the site\'s token.';
$string['mm.login.help'] = 'Help';
$string['mm.login.helpmelogin'] = '<p>There are many thousands of Moodle sites around the world. This app can only connect to Moodle sites that have specifically enabled Mobile app access.</p><p>If you can\'t connect to your Moodle site then you need to contact a Moodle administrator at the place where you want to connect and ask them to read <a href="http://docs.moodle.org/en/Mobile_app" target="_blank">http://docs.moodle.org/en/Mobile_app</a></p><p>To test the app in a Moodle demo site type <i>teacher</i> or <i>student</i> in the <i>Site URL</i> field and click the <b>Add button</b>.</p>';
$string['mm.login.invalidaccount'] = 'Please check your login details or ask your site administrator to check the site configuration.';
$string['mm.login.invalidmoodleversion'] = 'Invalid Moodle version. The minium version required is 2.4.';
$string['mm.login.invalidsite'] = 'The site URL is invalid.';
$string['mm.login.localmobileunexpectedresponse'] = 'Moodle Mobile Additional Features check returned an unexpected response, you will be authenticated using the standard Mobile service.';
$string['mm.login.login'] = 'Login';
$string['mm.login.loginbutton'] = 'Login!';
$string['mm.login.logininsiterequired'] = 'You need to log in to the site in a browser window.';
$string['mm.login.mobileservicesnotenabled'] = 'Mobile Services are not enabled in your site. Please, contact your Moodle site administrator if you think mobile access should be enabled.';
$string['mm.login.newsitedescription'] = 'Please enter the URL of your Moodle site. Note that it might not be configured to work with this app.';
$string['mm.login.notloggedin'] = 'You need to be logged in.';
$string['mm.login.password'] = 'Password';
$string['mm.login.passwordrequired'] = 'Password required';
$string['mm.login.reconnect'] = 'Reconnect';
$string['mm.login.reconnectdescription'] = 'Your authentication token is invalid or has expired, you have to reconnect to the site.';
$string['mm.login.reconnectssodescription'] = 'Your authentication token is invalid or has expired, you have to reconnect to the site. You need to log in to the site in a browser window.';
$string['mm.login.siteaddress'] = 'Site address';
$string['mm.login.siteinmaintenance'] = 'Your site is in maintenance mode';
$string['mm.login.siteurl'] = 'Site URL';
$string['mm.login.siteurlrequired'] = 'Site URL required, i.e <i>http://www.yourmoodlesite.abc or https://www.yourmoodlesite.efg</i>';
$string['mm.login.username'] = 'Username';
$string['mm.login.usernamerequired'] = 'Username required';
$string['mm.login.webservicesnotenabled'] = 'Web Services are not enabled in your site. Please, contact your Moodle site administrator if you think mobile access should be enabled.';
$string['mm.question.errorattachmentsnotsupported'] = 'The application doesn\'t support attaching files to answers yet.';
$string['mm.question.errorquestionnotsupported'] = 'This type of question isn\'t supported by the app in your site: {{$a}}.';
$string['mm.question.howtodraganddrop'] = 'Tap to select then tap to drop.';
$string['mm.question.questionmessage'] = 'Question {{$a}}: {{$b}}';
$string['mm.question.unknown'] = 'Cannot determine status';
$string['mm.settings.about'] = 'About';
$string['mm.settings.appname'] = 'Moodle Mobile {{version}}';
$string['mm.settings.appready'] = 'App ready';
$string['mm.settings.cacheexpirationtime'] = 'Cache expiration time (miliseconds)';
$string['mm.settings.cordovadevicemodel'] = 'Cordova Device model';
$string['mm.settings.cordovadeviceosversion'] = 'Cordova Device OS version';
$string['mm.settings.cordovadeviceplatform'] = 'Cordova Device platform';
$string['mm.settings.cordovadeviceuuid'] = 'Cordova Device uuid';
$string['mm.settings.cordovaversion'] = 'Cordova version';
$string['mm.settings.credits'] = 'Credits';
$string['mm.settings.currentlanguage'] = 'Current language';
$string['mm.settings.deletesitefiles'] = 'Are you sure that you want to delete the downloaded files from the site \'{{sitename}}\'?';
$string['mm.settings.deletesitefilestitle'] = 'Delete site files';
$string['mm.settings.development'] = 'Development';
$string['mm.settings.deviceinfo'] = 'Device Info';
$string['mm.settings.deviceos'] = 'Device OS';
$string['mm.settings.devicewebworkers'] = 'Device Web Workers supported';
$string['mm.settings.displayformat'] = 'Display format';
$string['mm.settings.enabledebugging'] = 'Enable debugging';
$string['mm.settings.enabledownloadsection'] = 'Enable download sections';
$string['mm.settings.enabledownloadsectiondescription'] = 'Disable this option to speed up the loading of course sections.';
$string['mm.settings.enablesyncwifi'] = 'Allow sync only when on Wi-Fi';
$string['mm.settings.errordeletesitefiles'] = 'Error deleting site files.';
$string['mm.settings.errorsyncsite'] = 'Error synchronizing the site data, please check your internet connection and try again.';
$string['mm.settings.estimatedfreespace'] = 'Estimated free space';
$string['mm.settings.filesystemroot'] = 'Filesystem root';
$string['mm.settings.general'] = 'General';
$string['mm.settings.language'] = 'Language';
$string['mm.settings.license'] = 'License';
$string['mm.settings.localnotifavailable'] = 'Local notifications available';
$string['mm.settings.locationhref'] = 'Webview URL';
$string['mm.settings.navigatorlanguage'] = 'Navigator language';
$string['mm.settings.navigatoruseragent'] = 'Navigator userAgent';
$string['mm.settings.networkstatus'] = 'Internet connection status';
$string['mm.settings.reportinbackground'] = 'Report errors automatically';
$string['mm.settings.settings'] = 'Settings';
$string['mm.settings.sites'] = 'Sites';
$string['mm.settings.spaceusage'] = 'Space usage';
$string['mm.settings.storagetype'] = 'Storage type';
$string['mm.settings.success'] = 'Success!';
$string['mm.settings.synchronization'] = 'Synchronization';
$string['mm.settings.synchronizenow'] = 'Synchronize now';
$string['mm.settings.synchronizing'] = 'Synchronizing';
$string['mm.settings.syncsettings'] = 'Synchronization settings';
$string['mm.settings.syncsitesuccess'] = 'Site data synchronized and all caches invalidated.';
$string['mm.settings.total'] = 'Total';
$string['mm.settings.versioncode'] = 'Version code';
$string['mm.settings.versionname'] = 'Version name';
$string['mm.settings.wificonnection'] = 'WiFi connection';
$string['mm.sidemenu.appsettings'] = 'App settings';
$string['mm.sidemenu.changesite'] = 'Change site';
$string['mm.sidemenu.help'] = 'Help';
$string['mm.sidemenu.logout'] = 'Change site';
$string['mm.sidemenu.mycourses'] = 'My courses';
$string['mm.sidemenu.togglemenu'] = 'Toggle menu';
$string['mm.sidemenu.website'] = 'Website';
$string['mm.user.address'] = 'Address';
$string['mm.user.city'] = 'City';
$string['mm.user.contact'] = 'Contact';
$string['mm.user.country'] = 'Country';
$string['mm.user.description'] = 'Description';
$string['mm.user.details'] = 'Details';
$string['mm.user.detailsnotavailable'] = 'The details of this user are not available to you.';
$string['mm.user.editingteacher'] = 'Teacher';
$string['mm.user.email'] = 'Email';
$string['mm.user.interests'] = 'Interests';
$string['mm.user.invaliduser'] = 'Invalid user.';
$string['mm.user.manager'] = 'Manager';
$string['mm.user.phone1'] = 'Phone';
$string['mm.user.phone2'] = 'Mobile';
$string['mm.user.roles'] = 'Roles';
$string['mm.user.student'] = 'Student';
$string['mm.user.teacher'] = 'Non-editing teacher';
$string['mm.user.viewprofile'] = 'View profile';
$string['mm.user.webpage'] = 'Web page';
$string['mma.calendar.calendarevents'] = 'Calendar events';
$string['mma.calendar.errorloadevent'] = 'Error loading event.';
$string['mma.calendar.errorloadevents'] = 'Error loading events.';
$string['mma.calendar.noevents'] = 'There are no events';
$string['mma.calendar.notifications'] = 'Notifications';
$string['mma.competency.errornocompetenciesfound'] = 'No competencies found';
$string['mma.competency.mylearningplans'] = 'My learning plans';
$string['mma.competency.nocompetencies'] = 'No competencies';
$string['mma.coursecompletion.complete'] = 'Complete';
$string['mma.coursecompletion.completecourse'] = 'Complete course';
$string['mma.coursecompletion.completed'] = 'Completed';
$string['mma.coursecompletion.completiondate'] = 'Completion date';
$string['mma.coursecompletion.couldnotloadreport'] = 'Could not load the course completion report, please try again later.';
$string['mma.coursecompletion.coursecompletion'] = 'Course completion';
$string['mma.coursecompletion.criteria'] = 'Criteria';
$string['mma.coursecompletion.criteriagroup'] = 'Criteria group';
$string['mma.coursecompletion.criteriarequiredall'] = 'All criteria below are required';
$string['mma.coursecompletion.criteriarequiredany'] = 'Any criteria below are required';
$string['mma.coursecompletion.inprogress'] = 'In progress';
$string['mma.coursecompletion.manualselfcompletion'] = 'Manual self completion';
$string['mma.coursecompletion.notyetstarted'] = 'Not yet started';
$string['mma.coursecompletion.pending'] = 'Pending';
$string['mma.coursecompletion.required'] = 'Required';
$string['mma.coursecompletion.requiredcriteria'] = 'Required criteria';
$string['mma.coursecompletion.requirement'] = 'Requirement';
$string['mma.coursecompletion.status'] = 'Status';
$string['mma.coursecompletion.viewcoursereport'] = 'View course report';
$string['mma.files.admindisableddownload'] = 'Please note that your Moodle administrator disabled file downloads, you can browse through the files but not download them.';
$string['mma.files.audio'] = 'Audio';
$string['mma.files.camera'] = 'Camera';
$string['mma.files.chooseaccountuploadfile'] = 'Choose an account to upload the file to.';
$string['mma.files.clicktoupload'] = 'Click the button below to upload files to your private files.';
$string['mma.files.confirmuploadfile'] = 'You are about to upload {{size}}. Are you sure you want to continue?';
$string['mma.files.couldnotloadfiles'] = 'The list of files could not be loaded.';
$string['mma.files.downloading'] = 'Downloading';
$string['mma.files.emptyfilelist'] = 'There are no files to show.';
$string['mma.files.errorcapturingaudio'] = 'Error capturing audio.';
$string['mma.files.errorcapturingimage'] = 'Error capturing image.';
$string['mma.files.errorcapturingvideo'] = 'Error capturing video.';
$string['mma.files.errorgettingimagealbum'] = 'Error getting image from album.';
$string['mma.files.errormustbeonlinetoupload'] = 'You have to be online to upload files.';
$string['mma.files.errornoapp'] = 'You don\'t have an app installed to perform this action.';
$string['mma.files.errorreadingfile'] = 'Error reading file.';
$string['mma.files.errorreceivefilenosites'] = 'There are no sites stored. Please add a site before trying to upload a file.';
$string['mma.files.errorwhiledownloading'] = 'An error occured while trying to download the file.';
$string['mma.files.errorwhilerecordingaudio'] = 'An error occured while trying to record audio.';
$string['mma.files.errorwhileuploading'] = 'An error occured during the file upload.';
$string['mma.files.file'] = 'File';
$string['mma.files.fileuploaded'] = 'The file was successfully uploaded.';
$string['mma.files.myfiles'] = 'My files';
$string['mma.files.myprivatefiles'] = 'My private files';
$string['mma.files.myprivatefilesdesc'] = 'The files that are available in your private area on this Moodle site.';
$string['mma.files.photoalbums'] = 'Photo albums';
$string['mma.files.readingfile'] = 'Reading file';
$string['mma.files.sitefiles'] = 'Site files';
$string['mma.files.sitefilesdesc'] = 'The other files that are available to you on this Moodle site.';
$string['mma.files.success'] = 'Success!';
$string['mma.files.uploadafile'] = 'Upload a file';
$string['mma.files.uploadfiles'] = 'Upload files';
$string['mma.files.uploading'] = 'Uploading';
$string['mma.files.video'] = 'Video';
$string['mma.frontpage.frontpage'] = 'Front page';
$string['mma.frontpage.sitehome'] = 'Site home';
$string['mma.grades.average'] = 'Average';
$string['mma.grades.contributiontocoursetotal'] = 'Contribution to course total';
$string['mma.grades.feedback'] = 'Feedback';
$string['mma.grades.grade'] = 'Grade';
$string['mma.grades.grades'] = 'Grades';
$string['mma.grades.itemname'] = 'Grade item';
$string['mma.grades.lettergrade'] = 'Letter grade';
$string['mma.grades.percentage'] = 'Percentage';
$string['mma.grades.range'] = 'Range';
$string['mma.grades.rank'] = 'Rank';
$string['mma.grades.viewgrades'] = 'View grades';
$string['mma.grades.weight'] = 'Weight';
$string['mma.messages.contactlistempty'] = 'The contact list is empty';
$string['mma.messages.contactname'] = 'Contact name';
$string['mma.messages.errordeletemessage'] = 'Error while deleting the message.';
$string['mma.messages.erroruseronlyacceptsmessagefromcontacts'] = '';
$string['mma.messages.errorwhileretrievingcontacts'] = 'Error while retrieving the contacts from the server.';
$string['mma.messages.errorwhileretrievingdiscussions'] = 'Error while retrieving the discussions from the server.';
$string['mma.messages.errorwhileretrievingmessages'] = 'Error while retrieving the messages from the server.';
$string['mma.messages.messagenotsent'] = 'The message was not sent, please try again later.';
$string['mma.messages.mustbeonlinetosendmessages'] = 'You must be online to send messages';
$string['mma.messages.newmessage'] = 'New message...';
$string['mma.messages.nomessages'] = 'No messages.';
$string['mma.messages.nousersfound'] = 'No users found';
$string['mma.messages.send'] = 'Send';
$string['mma.messages.type_blocked'] = 'Blocked';
$string['mma.messages.type_offline'] = 'Offline';
$string['mma.messages.type_online'] = 'Online';
$string['mma.messages.type_search'] = 'Search results';
$string['mma.messages.type_strangers'] = 'Others';
$string['mma.mod_assign.userwithid'] = 'User with Id {{id}}';
$string['mma.mod_chat.errorwhileconnecting'] = 'Error while connecting to the chat.';
$string['mma.mod_chat.errorwhilegettingchatdata'] = 'Error while getting chat data.';
$string['mma.mod_chat.errorwhilegettingchatusers'] = 'Error while getting chat users.';
$string['mma.mod_chat.errorwhileretrievingmessages'] = 'Error while retrieving the messages from the server.';
$string['mma.mod_chat.errorwhilesendingmessage'] = 'Error while sending the message.';
$string['mma.mod_chat.mustbeonlinetosendmessages'] = 'You must be online to send messages';
$string['mma.mod_choice.errorgetchoice'] = 'Error getting choice data.';
$string['mma.mod_choice.numberofuser'] = 'Number of participants';
$string['mma.mod_choice.numberofuserinpercentage'] = 'Percentage of participants';
$string['mma.mod_choice.responsesresultgraphdescription'] = '{{number}}% of the users chose the option: {{text}}.';
$string['mma.mod_folder.emptyfilelist'] = 'There are no files to show.';
$string['mma.mod_folder.errorwhilegettingfolder'] = 'Error while getting folder data.';
$string['mma.mod_forum.erroremptysubject'] = 'Post subject cannot be empty';
$string['mma.mod_forum.errorgetforum'] = 'Error getting forum data.';
$string['mma.mod_forum.errorgetgroups'] = 'Error getting group settings.';
$string['mma.mod_forum.forumnodiscussionsyet'] = 'There are no discussion topics yet in this forum.';
$string['mma.mod_forum.group'] = 'Group';
$string['mma.mod_forum.numdiscussions'] = '{{numdiscussions}} discussions';
$string['mma.mod_forum.numreplies'] = '{{numreplies}} replies';
$string['mma.mod_glossary.browsemode'] = 'Browse entries';
$string['mma.mod_glossary.byalphabet'] = 'Alphabetically';
$string['mma.mod_glossary.byauthor'] = 'Group by author';
$string['mma.mod_glossary.bynewestfirst'] = 'Newest first';
$string['mma.mod_glossary.byrecentlyupdated'] = 'Recently updated';
$string['mma.mod_glossary.bysearch'] = 'Search';
$string['mma.mod_glossary.entrypendingapproval'] = 'This entry is pending approval.';
$string['mma.mod_glossary.errorloadingentries'] = 'An error occured while loading entries.';
$string['mma.mod_glossary.errorloadingentry'] = 'An error occured while loading the entry.';
$string['mma.mod_glossary.errorloadingglossary'] = 'An error occured while loading the glossary.';
$string['mma.mod_glossary.noentriesfound'] = 'No entries were found.';
$string['mma.mod_glossary.searchquery'] = 'Search query';
$string['mma.mod_imscp.showmoduledescription'] = 'Show description';
$string['mma.mod_label.label'] = 'Label';
$string['mma.mod_label.taptoview'] = 'Tap to view the label.';
$string['mma.mod_lti.errorgetlti'] = 'Error getting module data.';
$string['mma.mod_lti.errorinvalidlaunchurl'] = 'The launch URL is not valid.';
$string['mma.mod_lti.launchactivity'] = 'Launch the activity';
$string['mma.mod_page.errorwhileloadingthepage'] = 'Error while loading the page content.';
$string['mma.mod_quiz.cannotsubmitquizdueto'] = 'This quiz cannot be submitted due to the following reasons:';
$string['mma.mod_quiz.confirmcontinueoffline'] = 'This attempt hasn\'t been synchronized since {{$a}}. If you have continued this attempt in another device after that time you could lose data.';
$string['mma.mod_quiz.confirmleavequizonerror'] = 'An error occurred while saving the answers. Are you sure you want to leave the quiz?';
$string['mma.mod_quiz.errorbehaviournotsupported'] = 'This quiz can\'t be attempted in the app because the behaviour is not supported by the app:';
$string['mma.mod_quiz.errordownloading'] = 'Error downloading required data.';
$string['mma.mod_quiz.errorgetattempt'] = 'Error getting attempt data.';
$string['mma.mod_quiz.errorgetquestions'] = 'Error getting questions.';
$string['mma.mod_quiz.errorgetquiz'] = 'Error getting quiz data.';
$string['mma.mod_quiz.errorparsequestions'] = 'An error occurred while treating the questions. Please attempt this quiz in a browser.';
$string['mma.mod_quiz.errorquestionsnotsupported'] = 'This quiz can\'t be attempted in the app because it can contain questions not supported by the app:';
$string['mma.mod_quiz.errorrulesnotsupported'] = 'This quiz can\'t be attempted in the app because it has active rules not supported by the app:';
$string['mma.mod_quiz.errorsaveattempt'] = 'An error occurred while saving the attempt data.';
$string['mma.mod_quiz.errorsyncquiz'] = 'An error occurred while synchronizing. Please try again.';
$string['mma.mod_quiz.errorsyncquizblocked'] = 'This quiz cannot be synchronized right now because there\'s an ongoing operation. Please try again later. If the problem persists, please restart the app.';
$string['mma.mod_quiz.finishnotsynced'] = 'Finished but not synchronized';
$string['mma.mod_quiz.hasdatatosync'] = 'This quiz has offline data to be synchronized.';
$string['mma.mod_quiz.opentoc'] = 'Open navigation popover.';
$string['mma.mod_quiz.warningattemptfinished'] = 'Offline attempt was discarded because it was finished in site or not found.';
$string['mma.mod_quiz.warningdatadiscarded'] = 'Some offline answers were discarded because the questions were modified in online.';
$string['mma.mod_quiz.warningdatadiscardedfromfinished'] = 'Attempt wasn\'t finished because some offline answers were discarded. Please review your answers are ok and submit the attempt again.';
$string['mma.mod_resource.errorwhileloadingthecontent'] = 'Error while loading the content.';
$string['mma.mod_resource.openthefile'] = 'Open the file';
$string['mma.mod_scorm.cannotcalculategrade'] = 'Grade couldn\'t be calculated.';
$string['mma.mod_scorm.dataattemptshown'] = 'This data belongs to the attempt number {{number}}.';
$string['mma.mod_scorm.errorcreateofflineattempt'] = 'An error occurred while creating a new offline attempt. Please try again.';
$string['mma.mod_scorm.errordownloadscorm'] = 'Error downloading SCORM: "{{name}}".';
$string['mma.mod_scorm.errorgetscorm'] = 'Error getting SCORM data.';
$string['mma.mod_scorm.errorinvalidversion'] = 'Sorry, the application only supports SCORM 1.2.';
$string['mma.mod_scorm.errornotdownloadable'] = 'The download of SCORM packages is disabled in your Moodle site. Please contact your Moodle site administrator.';
$string['mma.mod_scorm.errornovalidsco'] = 'This SCORM doesn\'t have a visible SCO to load.';
$string['mma.mod_scorm.errorpackagefile'] = 'Sorry, the application only supports ZIP packages.';
$string['mma.mod_scorm.errorsyncscorm'] = 'An error occurred while synchronizing. Please try again.';
$string['mma.mod_scorm.lastsync'] = 'Last synchronization';
$string['mma.mod_scorm.offlineattemptnote'] = 'This attempt has data that hasn\'t been synchronized.';
$string['mma.mod_scorm.offlineattemptovermax'] = 'This attempt cannot be sent because you surpassed the maximum number of attempts.';
$string['mma.mod_scorm.scormstatusnotdownloaded'] = 'This SCORM is not downloaded. It will be automatically downloaded when you open it.';
$string['mma.mod_scorm.scormstatusoutdated'] = 'This SCORM has been modified since the last download. It will be automatically downloaded when you open it.';
$string['mma.mod_scorm.warningofflinedatadeleted'] = 'Some offline data of the attempt {{number}} has been deleted because it couldn\'t be created into a new attempt.';
$string['mma.mod_scorm.warningsynconlineincomplete'] = 'Some attempts couldn\'t be synchronized with the site because the last online attempt is not finished. Please finish the online attempt first.';
$string['mma.mod_survey.cannotsubmitsurvey'] = 'Sorry, there was a problem submitting your survey. Please try again.';
$string['mma.mod_survey.errorgetsurvey'] = 'Error getting survey data.';
$string['mma.mod_survey.results'] = 'Results';
$string['mma.mod_url.accessurl'] = 'Access the URL';
$string['mma.mod_url.pointingtourl'] = 'URL this resource points to';
$string['mma.mod_wiki.errorloadingpage'] = 'An error occured while loading page.';
$string['mma.mod_wiki.errornowikiavailable'] = 'This wiki does not have any content yet.';
$string['mma.mod_wiki.gowikihome'] = 'Go Wiki home';
$string['mma.mod_wiki.subwiki'] = 'Subwiki';
$string['mma.mod_wiki.viewpage'] = 'View page';
$string['mma.notes.addnewnote'] = 'Add a new note';
$string['mma.notes.coursenotes'] = 'Course notes';
$string['mma.notes.eventnotecreated'] = 'Note created';
$string['mma.notes.nonotes'] = 'There are no notes of this type yet';
$string['mma.notes.note'] = 'Note';
$string['mma.notes.notes'] = 'Notes';
$string['mma.notes.personalnotes'] = 'Personal notes';
$string['mma.notes.publishstate'] = 'Context';
$string['mma.notes.sitenotes'] = 'Site notes';
$string['mma.notes.userwithid'] = 'User with Id {{id}}';
$string['mma.notifications.errorgetnotifications'] = 'Error getting notifications';
$string['mma.notifications.notifications'] = 'Notifications';
$string['mma.notifications.therearentnotificationsyet'] = 'There are no notifications';
$string['mma.participants.noparticipants'] = 'No participants found for this course';
$string['mma.participants.participants'] = 'Participants';
$string['pluginname'] = 'Moodle Mobile language strings';

