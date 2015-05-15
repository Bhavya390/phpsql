package com.example.bhavya.phpsql;

import android.app.Activity;
import android.content.Intent;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;

public class MainScreenActivity extends Activity {

    Button btnViewDetails;
    Button btnAddDetails;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main_screen);
        // Buttons
        btnViewDetails = (Button) findViewById(R.id.btnViewDetails);
        btnAddDetails = (Button) findViewById(R.id.btnAddDetails);
        // view details click event
        btnViewDetails.setOnClickListener(new View.OnClickListener() {

            @Override
            public void onClick(View view) {
                // Launching All details Activity
                Intent i = new Intent(getApplicationContext(), AllDetailsActivity.class);
                startActivity(i);

            }
        });
        // view products click event
        btnAddDetails.setOnClickListener(new View.OnClickListener() {

            @Override
            public void onClick(View view) {
                // Launching create new product activity
                Intent i = new Intent(getApplicationContext(), AddDetailsActivity.class);
                startActivity(i);

            }
        });
    }

}
