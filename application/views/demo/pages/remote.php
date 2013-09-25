<h1>Pushing to a remote webhost</h1>
<p>I will now attempt to push to my remote webhost...</p>

<p>I'll be using sublime's SFTP package to assist.  Here's what I did:</p>

<h2>Part one: basic set-up:</h2>
<ol>
	<li>Login to the webhost</li>
	<li>I'm using cpanel, so I clicked "subdomains" and made myself a new subdomain.  I pointed the root to "codeignited/public"</li>
	<li>This automatically created the basic directory structure for me: /home/gristech/codeignited/public/</li>
	<li>In sublime, I already have the SFTP package installed.  I right-click my root "CodeIgnited" folder, and choose "Map to Remote"</li>
	<li>This launches an editable JSON array:</li>
</ol>

<pre>{
    // The tab key will cycle through the settings when first created
    // Visit http://wbond.net/sublime_packages/sftp/settings for help
    
    // sftp, ftp or ftps
    "type": "sftp",

    "save_before_upload": true,
    "upload_on_save": false,
    "sync_down_on_open": false,
    "sync_skip_deletes": false,
    "sync_same_age": true,
    "confirm_downloads": false,
    "confirm_sync": true,
    "confirm_overwrite_newer": false,
    
    "host": "example.com",
    "user": "username",
    //"password": "password",
    //"port": "22",
    
    "remote_path": "/example/path/",
    "ignore_regexes": [
        "\\.sublime-(project|workspace)", "sftp-config(-alt\\d?)?\\.json",
        "sftp-settings\\.json", "/venv/", "\\.svn", "\\.hg", "\\.git",
        "\\.bzr", "_darcs", "CVS", "\\.DS_Store", "Thumbs\\.db", "desktop\\.ini"
    ],
    //"file_permissions": "664",
    //"dir_permissions": "775",
    
    //"extra_list_connections": 0,

    "connect_timeout": 30,
    //"keepalive": 120,
    //"ftp_passive_mode": true,
    //"ssh_key_file": "~/.ssh/id_rsa",
    //"sftp_flags": ["-F", "/path/to/ssh_config"],
    
    //"preserve_modification_times": false,
    //"remote_time_offset_in_hours": 0,
    //"remote_encoding": "utf-8",
    //"remote_locale": "C",
}</pre>

<p>Here are the important parts that need to be updated:</p>
<pre>
    "host": "siteground252.com",
    "user": "gristech",
    "password": "MYPASSWORD",
    "port": "18765",

    "remote_path": "/home/gristech/codeignited",

    "ssh_key_file": "/home/ryan/.ssh/siteground_dsa",
</pre>

The other one I like to change is this:
<pre>
    "upload_on_save": true,
</pre>
<p>HOWEVER: we're not going to do that quite yet... I will explain in a moment.</p>

<p>Now that's been configured, I make my first push by right-clicking my root, "CodeIgnited" folder, and choosing "upload folder".</p>
<p>In this case it took less than one minute to upload my entire application.</p>
<p>This next one is somewhat optional and unrelated, but I did it, so I'll write it down.  I'm going to secure my app a bit by moving the main index.php file from CodeIgnited/index.php to CodeIgnited/public/index.php</p>
<p>This requires us to change a few lines of index.php:</p>

<pre>	$system_path = 'system';</pre>
to
<pre>	$system_path = '../system';</pre>

and
<pre>	$system_path = 'application';</pre>
to
<pre>	$system_path = '../application';</pre>

<p>Now, loading the page yields an SQL error. That's actually a good thing...</p>
<h2>Part 2: Database</h2>
<p>I have dumped my local sql as follows:</p>
<ol>
	<li>visit http://127.0.0.1/phpmyadmin/ and login</li>
	<li>From the root level, select "Export"</li>
	<li>On the export screen, choose "custom" and select the appropriate database ('gristech_cid' in my case)</li>
	<li>Leave everything else as default (you could rename it, etc., but I assume you can troubleshoot this step for yourself).</li>
	<li>I moved my sql file into my application/sql folder for consistency/future reference</li>
	<li>Back in sublime, I right-click -> upload the SQL file</li>
	<li>Note: if I had really been smart, I would have done this step before I uploaded the rest of the app.</li>
	<li>Back on the webhost, I go cpanel -> phpmyadmin</li>
	<li>Click import</li>
	<li>Click "Choose file" and of course, choose the file</li>
	<li>Click go</li>
</ol>

<h2>Misc</h2>
<p>
	My database connection structure is nearly the same, but the password is different on the remote server.  For this reason, I don't have have the "upload on save" set to true yet.  I can, for example, change this line application/config/database.php
</p>
<pre>	$db['default']['password'] = 'remotepassword';</pre>
<p>Then I press control-s, right-click -> upload, then press control-z, control-s to restore my local copy.</p>
<p>I hope that makes sense... now my local copy contains my local password, and my remote copy contains the remote password.</p>

<h2>Finishing up</h2>
<p>Once I'm done fine-tuning things, I edit /.sftp-config and set the SFTP upload to "true" so that my future content changes will auto-update.  Any time I need to update something in one place versus another, I manually change this.  SFTP also makes it possible to exclude files by regex, but that's another show.</p>
<p>Please note that the SQL databases are of course not in sync, but anything else is: controllers, models, etc.  Once I get migrations going, the structure of the databases will be in sync... until then, any changes to the DB wll have to be replicated here and there.</p>
<h2>What's the advantage of this?</h2>
<p>My application is now "deployed".  All things considered, it took a little less than an hour to do, including basic troubleshooting.  With the help of this guide, I'll be able to do it faster next time.  Most importantly, I can quickly make, edit, and demonstrate live changes for demos, mockups, pages, styles, etc... anywhere, anytime.</p>