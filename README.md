# www.refugelarp
www.refugelarp.org source

Note that this in no way automatically deploys




Instructions for deploying updates:
1)  At the moment, only jerrod can push changes via ftp
2)  Prepare a list of changing files, so jerrod can push only what is changing; because ftp sucks
3)  Jerrod pulls down your changes, runs it on a local server, and attempts to QA things because folks are nervous
4)  Jerrod notifies Corey that we are updating some files 
5)  Jerrod pushes the files up the ftp site, and verifies it all works


Hopefully this will change, and we can move to some hosting not dependent on ftp.



Possibly gotchas:
There is also a /forum directory, not checked in to git, which contains ~6k files from our forum software
