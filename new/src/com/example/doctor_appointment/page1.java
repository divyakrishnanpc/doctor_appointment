package com.example.doctor_appointment;
import android.app.Activity;
import android.content.Intent;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;

public class page1 extends Activity{
	Button login,register;
	protected void onCreate(Bundle savedInstanceState) {
		// TODO Auto-generated method stub
		super.onCreate(savedInstanceState);
		setContentView(R.layout.page1);
		login=(Button)findViewById(R.id.button1);
		login.setOnClickListener(new View.OnClickListener() {
			@Override
			public void onClick(View v) {
				// TODO Auto-generated method stub
				Intent i1= new Intent(page1.this,page2.class);
				startActivity(i1);
			}
		});
		register=(Button)findViewById(R.id.button2);
		register.setOnClickListener(new View.OnClickListener() {
			@Override
			public void onClick(View v) {
				// TODO Auto-generated method stub
				Intent i2= new Intent(page1.this,page4.class);
				startActivity(i2);
			}
		});
	}

}


