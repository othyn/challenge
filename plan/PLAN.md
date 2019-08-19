# Proposal
Recreate the tasks outlined in the referenced images, as defined by their outlined spec counterpart.

## Part 1
![Part 1 Reference Image](https://github.com/othyn/challenge/blob/master/plan/assets/part_1.png)

Create a simple page layout to the best standards you know.

## Part 2
![Part 2 Reference Image](https://github.com/othyn/challenge/blob/master/plan/assets/part_2.png)

Create this form and an associated database schema; store all the appropriate information and send an email.

# Initial Impressions/Scoping

## Overall
- Tasks encompass simple content interaction. One being static, the second being a simple data capture exercise with non complex data structures. A form request with validation and storage will suffice, with user validation feedback.
- Tasks are light and don’t require a heavy footprint to enact functionality, although a framework accounts for development speed, security by default (sql injection, xss, utilisation of csrf tokens, etc), in build testing, and future expandability/maintainability for future developers. Opting for a framework as benefits outweigh the minor performance overhead when hosting. For this reason, Laravel seems appropriate as a rapid prototyping tool, with allowances to progress into a production environment without code change. A simple LAMP stack will suffice, within a Homestead virtualisation container for development which will allow fast transition to a production environment.
- Tasks require a UI framework of sorts to reduce scaffold UI creation for layout/component stylisation. Rapid prototyping of UI can be accomplished by vanilla usage of CSS3 flex box or grid, but doesn’t then provide a library of UI components to quickly refer against and implement (especially for stylised form components) or accessibility considerations (such as aria tags) taken into consideration by default. Thinking usage of Tailwind, Bulma or Bootstrap will assist with this with little overhead. If this was going into production as standalone page(s), I’d look at creating a bespoke SASS stylesheet which would reduce complexity and asset overhead/page weight. Although, compiling down to only required assets through web pack and static analysis will assist with package size anyway.
- Through clarification of the spec from my questions;
    - The logo has been obtained for Part 1.
    - The background pattern asset was not provided for Part 1.
    - The two tasks are not linked in functionality to each other.
- Even though the two tasks are not linked, a single development application to host both tasks at separate endpoints would be the most efficient solution. The tasks can then be accessed via a homepage with direction to both endpoints or checking the routing file for the application.

## Part 1
- Just to clarify, standalone, the Laravel overhead for this part alone is overkill, but provided a nice platform for demonstration purposes given is usage already for Part 2.
- Simple static HTML page, no requirement to dynamically load content, although can easily be developed in through CRUD MVC pattern.
- No UI element styling, default system font used with standardised styling on all element tags - review the requirement for a UI framework?
- Should be no problems with responsive design, as UI design is simplistic and follows a cohesive style.
- Logo asset location can be fixed to the top corner given a suitable margin push on the centre container. Or, a top row can be defined and a float right. Either approach will provide a responsive UI.
- Centre text block can either be a flex box element with centre justified content, or just a containing div with a sufficient margin and padding to provide the box style.
- Utilisation of helper classes will work wonders in this design to assist with stopping class re-use. E.g. for red UI elements defining a red colour class, although depends if you are following a Tailwind design paradigm of class based UI design then utilising JS components (in client side rendering React or VueJS apps) or a more Bootstrap/Bulma style of UI component classes within CSS.
- Footer can be contained in the same manor, with the footer pinned to the outer base of the main containing box element, separated by pipe.
- Copy for the paragraphs can be generated on a Lorem Ipsum generator, but check the text for specifics and ensure links are created.
- Unit testing can ensure endpoint delivers the correct page and assumed content.

## Part 2
- UI design is very reminiscent of the World Pay merchant management portal.
- Simple UI design but definitely stylised over browser defaults, font is unknown, can be asked or there are a multitude of online tools used in the past that utilise OCR to find it out.
- Assuming asterisk marks the field as required, modern UI research conducted that marking optional fields as ‘optional’ and leaving the required fields as unmarked leads to a higher uptake in information willingly provided and a more simplistic UI.
- UI structure should be easy to implement, flex box interface/box style, with title/subtitle, with an internal description list (DL/DD/DT) setup for the form elements themselves.
- As no relationship to context (such as an article), to an existing user account (to pre-fill your name), or to “Your friends" is provided, but could be added. I would ask for clarification on this point if it was a client/working spec, then a non-relationship is assumed, which simplifies both database structure and processing. Only items being captured are strings, of an undefined length - but a name/email field has no harm being limited to a VARCHAR 256 value, VARCHAR to utilise dynamic storage allocation up to the specified length and save on resource usage. This can be enforced through form validation to stop data loss on entries over the DB limit. Indexes for more commonly accessed fields can be created for quicker lookup/response times from the DB engine.
- Simple CRUD MVC setup, with standardised routing endpoints, form validation and DB model.
- Considerations GDPR opt-in/implicit consent model, retention periods, and collection of friends information.
- Unit testing can ensure:
    - The endpoint delivers the correct page.
    - The CRUD endpoints do not fail.
    - The form validation works correctly.
    - Database submission is ensured.
    - User feedback for invalid form submission is respected.
- As for the share action itself, what does the system utilise? Instant mailing or queue mailing? Assuming instant mailing for the task, but would otherwise clarify.
- If a friend with the same information exists, DB lookups for existing people on indexed fields can be performed to see if any match to vary the message that the system generates. From not at all for already sent messages, to “Check this out!” For the first, and “We noticed you haven’t viewed this yet” for repeat.

# Derived Task list

## Setup
- Initialise a new git repo on GitHub to track the project. Working from master branch as feature branch, no requirement for feature splitting.
- Initialise a new Laravel project named appropriately.
- Initial git commit to initialise tracked files.
- Asset build definition through web pack, creating the base page template which houses assets and base structure, enable cache busting.

## Part 1
- Unit test for verifying loading of the page endpoint is successful and content is found for the box title.
- Create a new static blade template for Part 1.
- Define a new static route for Part 1 page, pointing to newly created template.
- Create HTML structure of page, with content first, to reference against when designing. Containing divs with flex box, utilising justification for positioning, margin for outer spacing, padding for inner. Default browser styling on all UI elements unless otherwise defined (such as colouring). Add-in static logo asset and place appropriately, background tiled R checkerboard pattern could be recreated given time. Link endpoints have no definition, use existing website ones.
- Create SASS file for containing component styling of static page, style page appropriately. Minimal styling should need to be applied to achieve a responsive and replicated design.

## Part 2
- Unit test for verifying loading of the page endpoint is successful.
- Unit test for verifying form submission and validation is correct, with normal and edge case factory driven data.
- Unit test for Mail, utilising the log driver for assuring mail is sent.
- Create a new blade template for Part 2.
- New database schema definition through Laravel’s migration handler, defining 3 captured string fields (VARCHAR, storage size benefits, no indexing on fields as requirement is unknown, but can be added if frequently used as lookup/reference data).
- Define a new CRUD MVC and endpoint set, models utilising the Eloquent ORM.
- Replicate the UI design using the same method as Part 1.
- Focus on implementation of functionality, controller defines request handling and validation (through request object), model defines database interaction as ORM, view serves content and user feedback.
- On submission, validation is ensured and data is inserted into the database, into the appropriate fields via the Model ORM layer. Appropriate user feedback is given once this is complete, or fails.
- As for email sending, send alongside time of submission. A queue system can be implemented easily utilising Laravel’s inbuilt Mail handler. PHP’s inbuilt mail function could be used, in this instance utilising Laravel’s Mail handler will allow the driver to be set to Log for the purposes of this task. In production, this can be changed out in the projects environment file to a service of the projects requirements, such as AWS SES.
- For production systems, generating SSL certs through LetsEncrypt, installing a LAMP stack, hardening the box, setting up CI/CD processes, setting up firewalls, load balancing, asset uploads to CDN, caching, etc. can then all be setup through a service of choice. AWS, DigitalOcean, CloudFlare, etc.
