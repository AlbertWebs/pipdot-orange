<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class BlogsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('blogs')->delete();
        
        \DB::table('blogs')->insert(array (
            0 => 
            array (
                'id' => 1,
                'active' => 1,
                'slung' => 'monaco-launches-now-tourism-campaign',
                'title' => 'Monaco launches now tourism campaign',
                'tags' => NULL,
                'video' => NULL,
                'meta' => 'Sample Meta Tag For The Blog Title',
                'content' => '<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabom voluptatem reprehenderit qui in ea voluptate.</p>

<p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt.</p>

<p>Three main factors</p>

<p>Consectetur adipisci velit sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam.</p>

<ul>
<li>Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse.</li>
<li>Nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur.</li>
<li>Dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque.</li>
</ul>

<blockquote>
<p>At vero eose accusamus iusto dignissim ducimus blanditiis praesentium voluptatum deleniti atque oddi corrupti dolores membrant.</p>

<p><cite>Mark Harris</cite></p>
</blockquote>

<p>Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, aut reiciendis voluptatibus maiores consequatur perferendis doloribus asperiores repellat.</p>

<p>A report conclusion</p>

<p>Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus.</p>',
                'author' => 'John Gitonga',
                'category' => '1',
                'image_one' => '2021-04-0913:35:23imagein-blog-image-10.jpg',
                'image_two' => NULL,
                'image_three' => NULL,
                'image_four' => NULL,
                'created_at' => '2021-04-06 15:10:35',
                'updated_at' => '2021-04-06 15:10:35',
            ),
            1 => 
            array (
                'id' => 3,
                'active' => 1,
                'slung' => 'sample-tiltlee',
                'title' => 'Sample Tiltlee',
                'tags' => NULL,
                'video' => NULL,
                'meta' => 'Sample Meta Tag For The Blog Title',
                'content' => ' <p class="uk-dropcap">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabom voluptatem reprehenderit qui in ea voluptate.</p>
<p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt.</p>
<h4>Three main factors</h4>
<p>Consectetur adipisci velit sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam.</p>
<ul class="uk-list uk-list-bullet">
<li>Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse.</li>
<li>Nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur.</li>
<li>Dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque.</li>
</ul>
<blockquote class="in-blockquote" cite="#">
<p class="uk-margin-small-bottom">At vero eose accusamus iusto dignissim ducimus blanditiis praesentium voluptatum deleniti atque oddi corrupti dolores membrant.</p>
<footer>
<cite>Mark Harris</cite>
</footer>
</blockquote>
<p>Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, aut reiciendis voluptatibus maiores consequatur perferendis doloribus asperiores repellat.</p>
<h4>A report conclusion</h4>
<p>Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus.</p>
',
                'author' => 'John Gitonga',
                'category' => '2',
                'image_one' => '2021-04-0913:35:23imagein-blog-image-10.jpg',
                'image_two' => NULL,
                'image_three' => NULL,
                'image_four' => NULL,
                'created_at' => '2021-04-06 15:10:35',
                'updated_at' => '2021-04-06 15:10:35',
            ),
            2 => 
            array (
                'id' => 4,
                'active' => 1,
                'slung' => 'sample-tiltleee',
                'title' => 'Sample Tiltleee',
                'tags' => NULL,
                'video' => NULL,
                'meta' => 'Sample Meta Tag For The Blog Title',
                'content' => ' <p class="uk-dropcap">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabom voluptatem reprehenderit qui in ea voluptate.</p>
<p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt.</p>
<h4>Three main factors</h4>
<p>Consectetur adipisci velit sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam.</p>
<ul class="uk-list uk-list-bullet">
<li>Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse.</li>
<li>Nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur.</li>
<li>Dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque.</li>
</ul>
<blockquote class="in-blockquote" cite="#">
<p class="uk-margin-small-bottom">At vero eose accusamus iusto dignissim ducimus blanditiis praesentium voluptatum deleniti atque oddi corrupti dolores membrant.</p>
<footer>
<cite>Mark Harris</cite>
</footer>
</blockquote>
<p>Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, aut reiciendis voluptatibus maiores consequatur perferendis doloribus asperiores repellat.</p>
<h4>A report conclusion</h4>
<p>Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus.</p>
',
                'author' => 'John Gitonga',
                'category' => '4',
                'image_one' => '2021-04-0913:35:23imagein-blog-image-10.jpg',
                'image_two' => NULL,
                'image_three' => NULL,
                'image_four' => NULL,
                'created_at' => '2021-04-06 15:10:35',
                'updated_at' => '2021-04-06 15:10:35',
            ),
            3 => 
            array (
                'id' => 5,
                'active' => 1,
                'slung' => 'monaco-launches-now-tourism-campaigne',
                'title' => 'Monaco launches now tourism campaigne',
                'tags' => NULL,
                'video' => NULL,
                'meta' => 'Sample Meta Tag For The Blog Title',
                'content' => '<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabom voluptatem reprehenderit qui in ea voluptate.</p>

<p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt.</p>

<p>Three main factors</p>

<p>Consectetur adipisci velit sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam.</p>

<ul>
<li>Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse.</li>
<li>Nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur.</li>
<li>Dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque.</li>
</ul>

<blockquote>
<p>At vero eose accusamus iusto dignissim ducimus blanditiis praesentium voluptatum deleniti atque oddi corrupti dolores membrant.</p>

<p><cite>Mark Harris</cite></p>
</blockquote>

<p>Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, aut reiciendis voluptatibus maiores consequatur perferendis doloribus asperiores repellat.</p>

<p>A report conclusion</p>

<p>Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus.</p>',
                'author' => 'John Gitonga',
                'category' => '5',
                'image_one' => '2021-04-0913:35:23imagein-blog-image-10.jpg',
                'image_two' => NULL,
                'image_three' => NULL,
                'image_four' => NULL,
                'created_at' => '2021-04-06 15:10:35',
                'updated_at' => '2021-04-06 15:10:35',
            ),
            4 => 
            array (
                'id' => 6,
                'active' => 1,
                'slung' => 'sample-tiltleea',
                'title' => 'Sample Tiltleea',
                'tags' => NULL,
                'video' => NULL,
                'meta' => 'Sample Meta Tag For The Blog Title',
                'content' => ' <p class="uk-dropcap">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabom voluptatem reprehenderit qui in ea voluptate.</p>
<p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt.</p>
<h4>Three main factors</h4>
<p>Consectetur adipisci velit sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam.</p>
<ul class="uk-list uk-list-bullet">
<li>Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse.</li>
<li>Nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur.</li>
<li>Dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque.</li>
</ul>
<blockquote class="in-blockquote" cite="#">
<p class="uk-margin-small-bottom">At vero eose accusamus iusto dignissim ducimus blanditiis praesentium voluptatum deleniti atque oddi corrupti dolores membrant.</p>
<footer>
<cite>Mark Harris</cite>
</footer>
</blockquote>
<p>Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, aut reiciendis voluptatibus maiores consequatur perferendis doloribus asperiores repellat.</p>
<h4>A report conclusion</h4>
<p>Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus.</p>
',
                'author' => 'John Gitonga',
                'category' => '5',
                'image_one' => '2021-04-0913:35:23imagein-blog-image-10.jpg',
                'image_two' => NULL,
                'image_three' => NULL,
                'image_four' => NULL,
                'created_at' => '2021-04-06 15:10:35',
                'updated_at' => '2021-04-06 15:10:35',
            ),
        ));
        
        
    }
}