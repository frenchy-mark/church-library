# church-library
Website repository for accessing church library database.

NEED TO DO
===============

Implement Status

Implement Check-Out system - Successfully completed. Correctly entering user and book into transaction log.

Implement Input Validation for all forms - Using javascript to implement.

Add links to top page - Added the home button.

Implement book search.

Implement search with other items, i.e authors, titles... - Finished on one page.

Implement Admin page with all options - Added page. Need to add functions.

Create Login page - Semi-implemented. Idea: Pull passwords when login is loaded and check via hashing, eliminates need to refresh the page.

Note: Don't delete a book from the library. Rather move it to a new table where deleted books can be stored.

Note: Need to add code that deals with multiple instances of a book rather then just choosing the first search result. Idea, if a search results in more than one result while looking for a book to checkout redirect to a page where the user can choose between the options by entering their unique id.

Idea: Add a how to use button at home page that a new user can click to get instructions on how to use the system.


Features to Add Later
======================

Automatic Emailing system for books overdue.

Automatic Database backup.

Book entry by scanning barcode.
