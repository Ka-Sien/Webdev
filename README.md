# Webdev

The Way of The GitMaster:

git clone + <repository_URL>

Creates a clone or copy of a targeted existing repository into a newly created directory.
Git fetch [--all/-a/-f/-t]

downloads new data(updates/changes) from a remote repository, but it does not integrate any of this new data.
git pull

updates current HEAD branch with the latest changes from the remote server. It not only downloads new data; it also directly integrates this new data.
It is Highly recommended to start a "git pull" with no uncommitted local changes(a clean working copy).
"git pull" tries to merge remote changes with your local ones, a so-called "merge conflict" can occur.
git add [-A/-u/-f/.]

Adds the content of the specified file(s) at the time the "git add" command is run. "git add" is used to stage changes for the next commit.
git commit

Sets a checkpoint in the development process which you can go back to later if needed.
You need to write a short message to explain what we have developed or changed in the source code with the command: git commit -m ""
git push

Uploads commits to the remote repository.(Commit changes first!)
If the branch is newly created, then you need to upload the branch with the command: "git push --set-upstream <branch_name>" or "git push -u origin <branch_name>"
git branch

Creates new branch locally. This allows several developers are able to work in parallel on the same project simultaneously.
git checkout [-b]

Used to switch from one branch to another.
Also used for checking out files and commits.
Important steps to succesfully switch between branches:
The changes in your currrent branch must be committed or stashed before you switch
The branch you want to check out should exist in your local
Shortcut command that allows you to create and switch to a branch at the same time: "git checkout -b <branch_name>" (-b stands for branch)
git status

Gives all necessary information about the current branch
Information like:
Wether the current branch is up to date
Wether there is anything to commit, push or pull
Wether there are files staged, unstaged or untracked
Wether there are files created, modified or deleted
git merge

Integrates your feature branch with all of its commits back to the dev(master) branch.
It's important to be on the specific branch that you want to merge with your feature branch.
How to merge the feature branch into the dev branch:
git checkout dev
git fetch
git merge <branch_name>
git revert

This is a safe way to undo commits.
Steps to revert:
To see the commit history use git log --oneline
git revert <hash_code>
shift-q to exit
Options:

-a/--all
This takes everything into account(stages all changes).
.
stages new files and modifications, without deletions
-u/--set-upstream
creates an upstream tracking connection and is especially useful when publishing a local branch on a remote for the first time.
git add -u= stages modifications and deletions, without new files
--amend
nothing more than a reset --soft HEAD
--tags
pushes all local tags
Terminology:

remote (repository/server): A common repository that all team members use to exchange their changes. Usually stored in a code hosting service like GitHub.
origin: Is a shorthand name for the remote repository(URL) that a project was originally cloned from. Example: origin = https://github.com/Ka-Sien/Webdev.git
HEAD: Reference to the last commit in the currently checked-out branch. You can see the HEAD as the "Current Branch".