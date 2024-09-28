<!DOCTYPE html>
<html>
    <head>
        <title>Employee Page</title>
    </head>
    <body>
        <h1>Welcome to Our Site</h1>
        <p>This is Employee Index</p>

        <?php 
            // foreach($employeedata as $key=>$value){
            //     echo $key ." = ". $value . "<br/>";
            // }
        ?>

        <!-- @php 
            foreach($employeedata as $key=>$value){
                    echo $key ." = ". $value . "<br/>";
                }
        @endphp -->

        <ul>
            @foreach($employeedata as $key=>$value)
                <li>{!! $key ." = ". $value . "<br/>" !!}</li>
            @endforeach
        </ul>
        

        @php 
            $city = "Yangon";
        @endphp 

        @php 
            echo $city
        @endphp

        @if($city === "Yangon")
            <h3>You Correct!</h3>
        @else
            <h3>You were wrong ! Try again</h3>
        @endif

    </body>
</html>