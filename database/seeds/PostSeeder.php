<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        for ($i = 0; $i < 13; $i++) {

            DB::table('posts')->insert(
                [
                    'title' => '10 Best Ways to do xyz',
                    'body' =>
                    'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse vulputate nisi sem, a tempor quam congue et. Morbi ut hendrerit libero. Suspendisse ut condimentum lacus. Nunc blandit arcu quis aliquet efficitur. Proin pharetra vel magna non sagittis. Phasellus erat orci, tincidunt ac metus ac, dictum euismod velit. Morbi tempus sit amet nibh a tristique. Duis mollis porta mauris, quis blandit nisi posuere quis. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nulla ultricies nulla ac eros consectetur, a condimentum eros commodo. Fusce at auctor magna. Suspendisse in tincidunt felis. Aliquam justo est, tempor sagittis maximus quis, elementum at nisl.

                    Duis ac congue felis. Mauris placerat quam vel magna cursus porta. Vivamus diam dui, aliquam at quam ut, iaculis luctus enim. Nunc consectetur tortor quis dolor ultricies rutrum. Nam gravida tempor purus vel auctor. Phasellus tristique, erat at pharetra finibus, magna mauris eleifend lacus, vitae semper massa est nec nisi. Interdum et malesuada fames ac ante ipsum primis in faucibus. Sed cursus, erat et suscipit luctus, augue nibh finibus nibh, dignissim consequat eros orci in sapien. Nulla arcu lectus, rutrum vitae sem sed, bibendum suscipit erat. Praesent venenatis placerat aliquet. Aliquam sed dapibus dui. Donec euismod egestas turpis ac rhoncus. Morbi viverra id urna eget tempus.
                    
                    Suspendisse pretium viverra enim lacinia facilisis. Maecenas vitae euismod erat, nec rhoncus nisi. Maecenas pulvinar vitae urna eget tincidunt. Duis non lorem lacinia sem sollicitudin venenatis. Nunc non turpis sit amet ligula cursus mollis. Aliquam pretium augue ac urna volutpat, vitae sodales tellus dignissim. Sed eu porttitor magna. Vivamus rutrum quam ut massa porttitor aliquet. Mauris a euismod nisi. Duis dui ligula, luctus vitae lacus vel, congue scelerisque felis.',
                    'excerpt' => 'Enticing small taste of the article',
                    'imageUrl' => "https://images.pexels.com/photos/3757944/pexels-photo-3757944.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940",

                ]
            );
        }
    }
}
