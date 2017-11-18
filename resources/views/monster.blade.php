@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
            <?php $monster = json_decode(json_encode($monsterinfo[0]->getmonster), true);
                  $user  = json_decode(json_encode($userinfo), true); ?>
                <div class="panel-heading">{{$monster[0]['name']}}</div>

                <div class="panel-body">
                    <img class="monsterimage" src="{{URL::asset($monster[0]['image_url'])}}"> <br>
                    <ul class="stats">
                        <h1> Monster stats </h1>
                        <li> attack: {{$monster[0]['attack']}}</li>
                        <li> defense: {{$monster[0]['defense']}}</li>
                        <li> Current hp: {{$monster[0]['curhp']}}</li>
                    </ul>
                    <ul class="stats">
                        <h1> You`re stats</h1>
                        <li> attack: {{$user['attack'] + $user['magical_attack']}}</li>
                        <li> defense: {{$user['defense']}}</li>
                        <li> curhp: {{$user['curhp']}}/{{$user['maxhp']}} </li>
                    </ul> <br><br><br>
                    <?php $cry     = Session::get('cry');
                          $won     = Session::get('won');
                          $lose    = Session::get('lose');
                          $combat  = Session::get('combat');
                          $monstername = Session::get('monster');?>
                    @if (isset($combat))
                        @foreach ($combat as $info)
                            <li><strong>{{$info['attacker']}} attacks {{$info['defender']}} for the amount of {{$info['damage']}}</strong></li>
                        @endforeach
                    @endif
                    @if (isset($won) || isset($lose))
                        @if ($won == 1)
                            <p>You defeated {{$monstername}}</p>
                            <button><a href="/location/10">Go on with the sand</a></button> <br>
                            <button><a href="/location/29">Go towards the docks</a></button> <br>
                        @elseif ($lose == 1)
                            <p>You have been killed by {{$monstername}}</p>
                            <li><a href="/location/1">Game over</a></li>
                    @endif
                    @else
                    <p> What are we gonna do {{$user['name']}}?</p>
                    <form action="{{action('HomeController@checkAttack')}}" method="post">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <input type="submit" name="attack" value="Attack the {{$monster[0]['name']}}"><br>
                        <input type="submit" name="taunt" value="Try to Taunt the {{$monster[0]['name']}}"><br>
                        <input type="submit" name="cry" value="Cry for the {{$monster[0]['name']}}"><br>
                        <input type="submit" name="run" value="Run away"><br>
                        <input type='hidden' name='monster' value="{{$monster[0]['name']}}" />
                    </form>
                    @endif
                @if (isset($cry))
                    <div class="alert alert-danger alert-dismissable"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Too bad</strong>
                        <ul>
                            <li>{{$cry}}</li>
                        </ul>
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection
