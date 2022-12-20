<?=
'<?xml version="1.0" encoding="UTF-8"?>'.PHP_EOL

?>
<rss version="2.0" xmlns:atom="http://www.w3.org/2005/Atom">
    <channel>
        <title>Xcellent Insights ></title>
        <link>https://www.xcellentinsights.com/</link>
        <atom:link href="https://www.xcellentinsights.com/" rel="self" type="application/rss+xml" />
        <description>Xcellent Insights a leading provider of market research and consulting on various industries, to help clients make strategic decisions which drives their business growth.</description>
        <language>en</language>
        <pubDate>{{ date("D, d M Y G:i:s O", strtotime(now())); }}</pubDate>
  
        @foreach($results as $post)
            <item>
                <title>{{ $post->title }}></title>
                <link>{{ URL::to('/').'/press-release/'.$post->url }}</link>
                <atom:link href="{{ URL::to('/').'/press-release/'.$post->url }}" rel="self" type="application/rss+xml" />
                <description>{!! $post->description !!}</description>
                <pubDate>{{ date("D, d M Y G:i:s O", strtotime($post->created_at)); }}</pubDate>
            </item>
        @endforeach
    </channel>
</rss> 

