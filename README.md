# www.refugelarp
https://www.refugelarp.org source repository

At the moment, merged changes to "main" are automatically deployed to:
http://www.refugelarp.staging.rtc.refugelarp.org/
This is a github pages publish of the main branch.

The process of getting them from staging to prod is excessively manual and easy to mess up.

Instructions for deploying updates to prod:
1)  At the moment, only jerrod can push changes via ftp
2)  Prepare a list of changing files, so jerrod can push only what is changing; because ftp sucks
3)  Jerrod notifies Corey that we are updating some files
4)  Jerrod pushes the files up the ftp site, and verifies it all works

Hopefully this will change, and we can move to some hosting not dependent on ftp.

Possibly gotchas:
There is also a /forum directory, not checked in to git, which contains ~6k files from our forum software


Notes:  
If we want to change the pages URL:
  * in github, in the repo, go to settings->Pages
  * configure DNS to point appropriately as per https://docs.github.com/en/pages/configuring-a-custom-domain-for-your-github-pages-site/managing-a-custom-domain-for-your-github-pages-site
    * short version:  create a CNAME for the URL to point to refuge-larp.github.io.   If doing an apex domain, look up the IPs to hardcode as A & AAAA records in the above URL
    * of note, the domain rtc.refugelarp.org is currently delegated to the digital ocean account, so any entries under that subdomain need to be managed from DO
