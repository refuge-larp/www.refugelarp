# www.refugelarp
https://www.refugelarp.org source repository

At the moment, merged changes to "main" are automatically deployed to:
https://www-staging.rtc.refugelarp.org/
This is a digital ocean App that the RTC account has access to.

The process of getting them from staging to prod is excessively manual and easy to mess up.

Instructions for deploying updates to prod:
1)  At the moment, only jerrod can push changes via ftp
2)  Prepare a list of changing files, so jerrod can push only what is changing; because ftp sucks
3)  Jerrod notifies Corey that we are updating some files
4)  Jerrod pushes the files up the ftp site, and verifies it all works

Hopefully this will change, and we can move to some hosting not dependent on ftp.

Possibly gotchas:
There is also a /forum directory, not checked in to git, which contains ~6k files from our forum software
