Summernote WYSIWYG editor converts uploaded images to base64.

This version (based on v0.8.2) allows images to be stored on server.

Recommended test for production servers:

- Upload summernote-imgupload.js to your "js" folder.
- Upload the "img" folder to root.
- Upload the summernote-upload.php to root (upload folder set to "images" directory, create if needed).
- Either modify your existing file to ref new "summernote-imgupload.js" file or create new one.

Now when you add image, it should be uploaded to the "images" folder. You can verify by either viewing source or loading the images folder.

The PHP upload script is very basic with no security and is not recommended for general public use. You should either add security or find a better PHP upload script, there are many free ones...

I had some issues with default icons not showing up in toolbar, no clue why (could be because of naming summernote-imgupload.js)... If you have icon issue and can figure it out, please share. Since I normally use custom icons, no time to solve that mystery. You can add custom icons to Summernote at:

https://github.com/StudioJunkyard/LibreICONS

I have tested this on local server and production CentOS. All worked. If you run into issues, afraid that I will not be much help as still learning Summernote. My suggestion is head over to stackoverflow (http://stackoverflow.com/search?q=summernote) and ask for help.

IF YOU ARE NOT COMFORTABLE WITH WORKING ON YOUR LIVE Summernote install, highly recommed you setup test enviroment...

Be happy, be nice, be a good person and not attack me if this does not work for you...

