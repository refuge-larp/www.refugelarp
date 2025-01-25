# www.refugelarp
https://www.refugelarp.org source repository

At the moment, merged changes to "main" are automatically deployed to:
[https://refuge-larp.github.io/www.refugelarp/](https://refuge-larp.github.io/www.refugelarp/)
This is a github pages publish of the main branch.


The process of getting them from staging to Live is triggered by creating a new release.
To create a new release,
  * go to the "Code" tab of the repo at https://github.com/refuge-larp/www.refugelarp and click "Releases"
    * https://github.com/refuge-larp/www.refugelarp/releases
  * click "Draft a new release"
    * Choose a new tag.  I'd suggest incrementing the number from the previous tag.
    * Choose an appropriate release title
    * Click Publish Release - and the release gets created and the upload Action should happen automatically
  * To see the status of the ftp push, you can examine log under "Actions"

If you'd like to see the whole process in action, you can [watch the process of updating a PDF on refugelarp.org on YouTube]([url](https://youtu.be/sAEIVrRZcig))

Possibly gotchas:
There is also a /forum directory, not checked in to git, which contains ~6k files from our forum software.
It is excluded from git and the release process.
