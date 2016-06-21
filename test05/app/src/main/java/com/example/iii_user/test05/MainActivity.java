package com.example.iii_user.test05;

import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.util.Log;
import android.view.View;
import android.widget.Button;
import android.widget.EditText;
import android.widget.TextView;

import java.io.IOException;
import java.util.List;

public class MainActivity extends AppCompatActivity {
    private TextView account1,password1,password2;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);

        account1 = (TextView) findViewById(R.id.account1);
        password1 = (TextView) findViewById(R.id.password1);


    }
    public void send(View v){

        new Thread(){
            @Override
            public void run() {
                doSend();
            }
        }.start();
    }
    private void doSend(){
        String intA = account1.getText().toString();
        String intP = password1.getText().toString();


        try {
            MultipartUtility mu = new MultipartUtility("http://10.2.12.104/send02.php","UTF-8");
            mu.addFormField("accou",intA);
            mu.addFormField("passwo",intP);

            List<String> ret = mu.finish();

            for(String line : ret){

                Log.i("Jack",line);
            }
        } catch (Exception e) {
            Log.i("Jack",e.toString());
        }

    }
}
