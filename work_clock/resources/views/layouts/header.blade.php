@section('header')

    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/">首页</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="/">考勤明细 <span class="sr-only">(current)</span></a></li>
                    <li><a href="{{ Route('userList') }}">用户列表</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">语言切换
                            <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">中文</a></li>
                            <li><a href="#">英文</a></li>

                            {{--<li role="separator" class="divider"></li>
                            <li><a href="#">Separated link</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="#">One more separated link</a></li>--}}
                        </ul>
                    </li>
                </ul>
                <form class="navbar-form navbar-left">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="请输入要搜索的内容">
                    </div>
                    <button type="submit" class="btn btn-default">提交</button>
                </form>
                <ul class="nav navbar-nav navbar-right">
                    @if(Auth::user())

                        <li><a href="#">您好,{{Auth::user()->name}} </a></li>
                    @endif
                    <li><a href="#">友情链接</a></li>
                    @if(Auth::user())
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">用户中心 <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">资料编辑</a></li>
                            <li><a href="#">站内信</a></li>
                            <li><a href="#">工作任务</a></li>
                            <li role="separator" class="divider"></li>

                            <li><a href="{{ route('logout') }}">退出</a></li>
                        </ul>
                    </li>
                    @else
                        <li><a href="{{ route('login') }}">登录</a></li>
                    @endif
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>
@endsection