<h1>List</h1>
<table>
    <tr>
        <td>id</td>
        <td>Title</td>
        <td>Image</td>
    </tr>
    @foreach($collection as $item)
    <tr>
        <td>{{$item['id']}}</td>
        <td>{{$item['title']}}</td>
        <td><img src={{ $item['thumbnailUrl'] }}/></td>
    </tr>
    @endforeach
</table>
