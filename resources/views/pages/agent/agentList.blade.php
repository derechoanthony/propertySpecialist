<div class="table-responsive">
    <table class="table user-list">
        <thead>
            <tr>
            <th><span>User</span></th>
            <th><span>Created</span></th>
            <th><span>Email</span></th>
            <th>&nbsp;</th>
            </tr>
        </thead>
        <tbody>
        @foreach($data as $value)
            <tr>
                <td>
                    <!-- <img src="https://bootdey.com/img/Content/user_1.jpg" alt=""> -->
                    <img src="{{ asset('/storage/public/imageUpload/'.$value['image']) }}" alt="">
                    <a href="#" class="user-link">{{ $value['fname'] }} {{ $value['lname'] }}</a>
                    <span class="user-subhead">Agent</span>
                </td>
                <td>{{ $value['created_at'] }}</td>
                <td>
                    <a href="#">{{ $value['email'] }}</a>
                </td>
                <td style="width: 20%;">
                    <a href="{{ url('/agent/'.$value['id'].'/preview') }}" class="table-link">
                        <span class="fa-stack">
                            <i class="fa fa-square fa-stack-2x"></i>
                            <i class="fa fa-search-plus fa-stack-1x fa-inverse"></i>
                        </span>
                    </a>
                    <a href="{{ url('/agent/'.$value['id'].'/update') }}" class="table-link">
                        <span class="fa-stack">
                            <i class="fas fa-pen-square fa-stack-2x"></i>
                            <i class="fas fa-pen-square fa-inverse"></i>
                        </span>
                    </a>
                    <a href="{{ url('/delete/'.$value['id'].'/agent') }}" class="table-link danger">
                        <span class="fa-stack">
                            <i class="fa fa-square fa-stack-2x"></i>
                            <i class="fas fa-trash fa-stack-1x fa-inverse"></i>
                        </span>
                    </a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{ $data->links() }}
</div>