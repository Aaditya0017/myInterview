
<style>
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover:not(.active) {
  background-color: #111;
}

.active {
  background-color: #04AA6D;
}
</style>
<ul>
  <li><a href="{{route('interviewer.index')}}">Home</a></li>
  <li><a href="{{route('interviewer.addjob')}}">Add Job</a></li>
  <li><a href="{{route('interviewer.jobs')}}">Your Jobs</a></li>
  <li><a href="{{route('interview.index')}}">Your Interviews</a></li>
  <li><a href="{{route('interview.completed')}}">Completed</a></li>

  <li style="float:right"><a href="#" onclick="document.getElementById('logout-form').submit();"> Logout</a></li>
</ul>

    <form id="logout-form" action="{{ route('interviewer.logout') }}" method="POST" style="display: none;">
        {{ csrf_field() }}
    </form>
