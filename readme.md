# Single Page CRUD Application made using Laravel + Livewire

# This is the CRUD Application that is made using Livewire which provides the feature of creating a Single Page Application without leaving the environment of PHP, with the help of if we can create Projects without having Full Page Reloads.

# In this Crud Application for Practicing Purposes I have add Features like Pagination without Full Page Reload and also Realtime Search Feature like in Datatable.

# During this I've learned multiple new things in which I got stuck also, Like the first issue that arised was that whenever I Adds a new Entry then the page redirects to the List page where all data is showing, but it doesn't shows the latest entry until I manually refreseh the Page,
# To fix this $this->dispatch() function and protected $listeners was used to add the feature of automatic refreshing the Data.

# Second Issue was that when I added the feature of Pagination, Search feature started misbehaving in such a way that whenver I am on the first page and searches for something it shows the corrects results, but whenver I am on any other page then it shows nothing even though there are results available.
# To fix this I had to add the functionality in the page that whenever a user types something in the search field then it will automatically takes it to the first page, This is a very flawless change, and doesn't even make any difference in User Experience.
# For search field lets say I had took a variable named as $search and we have to create a public function named as updatedSearch() and in this function we can run the inbuilt function of WithPagination Class $this->resetPage(); That's it !