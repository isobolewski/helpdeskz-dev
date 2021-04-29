<?php

// override core en language system validation or define your own en language validation message
return [
    'kb' => [
        'title' => 'Knowledge Base',
        'menu' => 'Knowledge base',
        'howCanWeHelpYou' => 'How can we help you?',
        'search' => 'Search in knowledge base',
        'moreTopics' => 'More Topics',
        'mostPopular' => 'Most popular articles',
        'newest' => 'Newest articles',
        'postedOn' => 'Posted on %date%',
        'searchResults' => 'Search results',
        'searchResultsFor' => 'Search results for %keyword%',
    ],
    'register' => [
        'menu' => 'Register',
        'title' => 'Register to %site_name%',
        'button' => 'Register',
        'loginLink' => 'Sign in',
        'validationEmailSent' => 'Registration successful! An activation link was sent to your email.',
    ],
    'login' => [
        'menu' => 'Login',
        'title' => 'Sign in to %site_name%',
        'button' => 'Sign In',
        'forgotPassword' => 'Forgot password',
        'forgotDescription' => 'Please enter your registered email address and click Submit. You will receive an email with a link to reset your password shortly.',
        'passwordSent' => 'We have sent an email with a new password to the address provided',
    ],
    'submitTicket' => [
        'title' => 'Submit a support request',
        'menu' => 'Submit ticket',
        'selectDepartment' => 'If you can\'t find a solution to your problem, you can submit a ticket by selecting the appropriate department below.',
        'generalInformation' => 'General information',
        'requestReceived' => 'Your request has been received',
        'requestReceivedDescription' => 'We have received your request and our team will get back to you shortly. You can log in to the helpdesk to review the status of your request, or check your email for further updates.',
    ],
    'viewTickets' => [
        'title' => 'My support tickets',
        'menu' => 'View tickets',
        'description' => 'Listed below are the tickets you\'ve submitted in the past. Click on a ticket\'s subject to view the ticket and its history.',
        'search' => 'Search Ticket ID',
        'notFound' => 'Ticket not found.',
        'ticketID' => 'View Ticket #%id%',
        'ticketClosed' => 'Ticket is currently closed.',
        'replySent' => 'Your reply to this ticket has been successfully submitted',
    ],
    'account' => [
        'menu' => 'Account',
        'editProfile' => 'Edit profile',
        'logout' => 'Logout',
        'general' => 'General',
        'changePassword' => 'Change password',
        'profileUpdated' => 'Your profile has been updated.',
        'passwordUpdated' => 'Password has been updated.'
    ],
    'form' => [
        'email' => 'Email address',
        'password' => 'Password',
        'submit' => 'Submit',
        'captchaVerification' => 'CAPTCHA verification',
        'search' => 'Search',
        'ticketID' => 'Ticket ID',
        'fullName' => 'Full name',
        'department' => 'Department',
        'priority' => 'Priority',
        'subject' => 'Subject',
        'yourMessage' => 'Your message',
        'attachments' => 'Attachments',
        'allowedFiles' => 'Allowed files',
        'browse' => 'Browse',
        'chooseFile' => 'Choose file',
        'lastUpdate' => 'Last Update',
        'status' => 'Status',
        'addReply' => 'Add reply',
        'goBack' => 'Go back',
        'staff' => 'Staff',
        'timezone' => 'Timezone',
        'defaultTimezone' => 'Default timezone',
        'newPassword' => 'New password',
        'existingPassword' => 'Existing password',
        'repeatPassword' => 'Repeat password',
        'confirm' => 'Confirm',
        'save' => 'Save',
        'open' => 'Open',
        'answered' => 'Answered',
        'awaiting_reply' => 'Awaiting reply',
        'in_progress' => 'In progress',
        'closed' => 'Closed',
        'user' => 'User',
        'departments' => 'Departments',
        'next' => 'Next'
    ],
    'error' => [
        'uploadFile' => 'There was an error uploading a file.',
        'fileNotAllowed' => 'File is not allowed.',
        'fileBig' => 'File is too big. Maximum size is %size%',
        'search' => 'We weren\'t able to find anything relevant to your search.',
        'fileNotFound' => 'File not found.',
        'fileNotFoundMsg' => 'The file you are trying to download is not longer available.',
        'enterFullName' => 'Enter your full name.',
        'enterValidEmail' => 'Enter a valid e-mail address.',
        'emailUsed' => 'Email address is already associated with another account.',
        'enterSubject' => 'Enter the subject.',
        'enterYourMessage' => 'Enter your message',
        'selectValidDepartment' => 'Select a valid department.',
        'invalidCaptcha' => 'ERROR: Invalid captcha verification.',
        'emailNotFound' => 'Email was not found.',
        'invalidEmailPassword' => 'Invalid email address or password.',
        'recordsNotFound' => 'Records not found.',
        'enterExistingPassword' => 'Enter your existing password.',
        'enterNewPassword' => 'Enter your new password.',
        'passwordsNotMatches' => 'The new passwords entered do not match.',
        'wrongExistingPassword' => 'Your existing password is incorrect.'
    ],
    '404' => [
        'title' => 'Page not found - 404',
        'body' => 'Oops, the page might have been removed or is temporarily unavailable.',
    ]
];
