# www.refugelarp
https://www.refugelarp.org source repository

At the moment, merged changes to "main" are automatically deployed to:
http://www.refugelarp.staging.rtc.refugelarp.org/
This is a github pages publish of the main branch.


The process of getting them from staging to prod is triggered by creating a new release.

Possibly gotchas:
There is also a /forum directory, not checked in to git, which contains ~6k files from our forum software.
It is excluded from git and the release process.


Notes:  
If we want to change the pages URL:
  * in github, in the repo, go to settings->Pages
  * configure DNS to point appropriately as per https://docs.github.com/en/pages/configuring-a-custom-domain-for-your-github-pages-site/managing-a-custom-domain-for-your-github-pages-site
    * short version:  create a CNAME for the URL to point to refuge-larp.github.io.   If doing an apex domain, look up the IPs to hardcode as A & AAAA records in the above URL
    * of note, the domain rtc.refugelarp.org is currently delegated to the digital ocean account, so any entries under that subdomain need to be managed from DO
