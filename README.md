# Codeigniter Includes Library

This tiny Codeigniter library is used for inserting multiple view files in an easy and managable fashion.  Created and Maintained by David Jenkins.

## Getting Started
-------------------

It is extremely easy to get started with this tiny library.  It takes literally 4 steps to use.

1.) Download the file and place it into your Codeigniter's application/libraries directory.

2.) Load the library as you would any normal Codeigniter library:

> $this->load->library('includes');

3.) Set your variable/properties for file names and file data as arrays or string(s):

> // Files To Include
> $this->files_include = array('includes/header', 'home', 'includes/footer');
>
> // File Data
> $this->data['includes/header']['title'] = 'Welcome Home';
> $this->data['home']['test'] = 'This is a test';
>
> OR
>
> // Files To Include
> $this->files_includes = 'home';
>
> // File Data
> $this->data['title'] = 'Welcome Home';

4.) Finally call the includes::include_files() method:

> $this->includes->include_files($this->files_includes, $this->data);