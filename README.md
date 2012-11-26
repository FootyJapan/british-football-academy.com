# INTRODUCTION

* CV Site
* Use in Browser - file:///Users/ian.warner/Dropbox/www/Triangle%20Solutions/ianwarner.com/index.html
* http://daringfireball.net/projects/markdown/basics

# GITHUB

* [GitHub Node API](https://github.com/ajaxorg/node-github)
* [Octonode](https://github.com/pksunkara/octonode)

# SALES

* [Wrap Bootstrap](https://wrapbootstrap.com/)
* [Theme Forest](http://themeforest.net/)
* [Wix](http://wix.com/)

# GIT COMMANDS

curl -i https://api.github.com/orgs/CVGenerator

* Auth Tokens
    * Create - curl -u 'iwarner' -d '{"scopes":["repo"],"note":"CVGenerator"}' https://api.github.com/authorizations
    * Get    - curl -u 'iwarner' https://api.github.com/authorizations
    * Delete - curl -X DELETE -u 'iwarner' https://api.github.com/authorizations/:id

* Repos
    * Create -
    curl -i -H 'Authorization: token ' \
    -d '{"name":"CVTEST","description":"CV Test Repo","homepage":"https://drykiss.com","private":false,"has_issues":false,"has_wiki":false,"has_downloads":false}' \
    https://api.github.com/orgs/CVGenerator/repos

* User
    * Get - curl -H "Authorization: token " https://api.github.com/users/iwarner

# LESS

    less-watcher -p -d /Users/ian.warner/Dropbox/www/Triangle%20Solutions/ianwarner.com/less

# TODO

* CVs
    * https://wrapbootstrap.com/theme/clear-resume-cv-responsive-WB0KN5PD9
    * https://wrapbootstrap.com/theme/responsive-resume-cv-vcard-theme-WB089771J
    * https://wrapbootstrap.com/theme/elegant-cv-WB04N1961
    * https://wrapbootstrap.com/theme/ko-cv-WB0DD846G
    * https://wrapbootstrap.com/theme/tomahawk-cv-WB09T4648
    * https://wrapbootstrap.com/theme/white-clean-cv-WB0C71J4N
    * https://wrapbootstrap.com/theme/myresume-WB0536847
    * https://wrapbootstrap.com/theme/resume-cv-responsive-WB083353B
    * https://wrapbootstrap.com/theme/simple-curriculum-vitae-WB0057UJ3

* Social
    * Create Facebook Page
    * Create Twitter account
    * Create Tumblr blog
    * Create Pinterest

* GitHub
    * Work out how to create the wikis within github and each project
        * OK easy - git@github.com:iwarner/iwarner.github.com.wiki.git
    * Create a new project for the main service site
    * Create template in this too
    * May need to pay for this account so they can be private

* Accounts
    * Set up Ali on DryKiss email - confirm when done
    * Create sales@

* Media Queries
    * Check that these work for all size and orientation of devices

BrowserTesting
    * IE7
        * Doc Icons not positioned fixed
        * No rounded corners
        * Spans of text not right
    * IE8
        * Image crushed
        * Doc Icons

* Coding
    * Add Date of Birth / Nationality Flag / Skype / Phone
    * Split up the spans correctly in the header
    * Remove email - instead create a contact form
    * Add Glyph icons for Phone / Email / Web etc
    * Add in Google Map Modal for Location
    * Increasing Email - Address etc can make everything wrap
    * Look at using Print Friendly service
    * Add Print Element
    * Create a proper printing Stylesheet for printing as PDF for instance
    * Customise the Bootstrap CSS and JS required
    * Add the Favicon
    * Add validation for CSS and HTML
    * Change CSS to Less
    * Max size on the cover letter add in Scrolling element - overflow Auto.
    * Create a new branch for the deployment to Sales sites
    * Add Top link toeach section
    * Can we add an intergrated time line.
    * Take a look at https://github.com/VeriteCo/TimelineJS - for work experience
    * Test the QR CODE
    * Complete VCard - create my own V-Card creator for use with these templates.
    * Add a loading spinner whilst the JS does its stuff
    * Create a form on the site so that a user can copy in the text and get a formatted section back.
