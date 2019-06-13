<?php

namespace App;

trait PageTemplates
{
    /*
    |--------------------------------------------------------------------------
    | Page Templates for Backpack\PageManager
    |--------------------------------------------------------------------------
    |
    | Each page template has its own method, that define what fields should show up using the Backpack\CRUD API.
    | Use snake_case for naming and PageManager will make sure it looks pretty in the create/update form
    | template dropdown.
    |
    | Any fields defined here will show up after the standard page fields:
    | - select template
    | - page name (only seen by admins)
    | - page title
    | - page slug
    */

    private function services()
    {
        $this->crud->addField([   // CustomHTML
                        'name'  => 'metas_separator',
                        'type'  => 'custom_html',
                        'value' => '<br><h2>Metas</h2><hr>',
                    ]);
  
        $this->crud->addField([   // CustomHTML
                        'name'  => 'content_separator',
                        'type'  => 'custom_html',
                        'value' => '<br><h2>Content</h2><hr>',
                    ]);
        $this->crud->addField([
                        'name'        => 'content1',
                        'label'       => 'Content 1',
                        'type'        => 'wysiwyg',
                        'placeholder' => 'Inhoud hier',
                    ]);
        $this->crud->addField([
                        'name'        => 'content2',
                        'label'       => 'Content 2',
                        'type'        => 'wysiwyg',
                        'placeholder' => 'Inhoud hier',
                    ]);
        $this->crud->addField([
                        'name'        => 'content3',
                        'label'       => 'Content 3',
                        'type'        => 'wysiwyg',
                        'placeholder' => 'Inhoud hier',
                    ]);
    }

    private function about_us()
    {
        $this->crud->addField([
                        'name'        => 'content',
                        'label'       => 'Content',
                        'type'        => 'wysiwyg',
                        'placeholder' => 'Your content here',
                    ]);
    }
}
