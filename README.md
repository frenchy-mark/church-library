# church-library
Website repository for accessing church library database.

NEED TO DO
===============

Implement Status

Implement Check-Out system - DONE

Implement Input Validation for all forms - Using javascript to implement.

Add links to top page - Added the home button.

Implement book search - DONE

Implement search with other items, i.e authors, titles... - Finished on two main search pages, may add two others searches later

Implement Admin page with all options - Added page. 50% functions implemented.

Create Login page - Semi-implemented. Idea: Pull passwords when login is loaded and check via hashing, eliminates need to refresh the page.

Note: Don't delete a book from the library. Rather move it to a new table where deleted books can be stored - DONE

Note: Need to add code that deals with multiple instances of a book rather then just choosing the first search result. Idea, if a search results in more than one result while looking for a book to checkout redirect to a page where the user can choose between the options by entering their unique id.

Idea: Add a how to use button at home page that a new user can click to get instructions on how to use the system.

Idea: Add about bottom that redirects to church website and support button that links to a page where the user can submit bug reports.


Features to Add Later
======================

Automatic Emailing system for books overdue.

Automatic Database backup.

Book entry by scanning barcode.

Link up to some form of Book API to provide more details about a book.
