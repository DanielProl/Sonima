package com.sonima.app;

import com.sonima.app.R;

import android.app.Activity;
import android.content.Intent;
import android.os.Bundle;
import android.view.View;
import android.view.Window;
import android.webkit.WebView;
import android.widget.ImageButton;

public class Intro extends Activity {

	private ImageButton myButton;

	
	@Override
	protected void onCreate(Bundle savedInstanceState) {
		// Se llama cuando se crea y cuando se rota la pantalla
		super.onCreate(savedInstanceState);
		requestWindowFeature(Window.FEATURE_NO_TITLE);
		setContentView(R.layout.intro);
		//setRequestedOrientation(ActivityInfo.SCREEN_ORIENTATION_PORTRAIT);
		
		
		myButton=(ImageButton)findViewById(R.id.myButton);
		
		myButton.setOnClickListener(new View.OnClickListener() {
		
		public void onClick(View component) {
			Intent intent = new Intent(getApplicationContext(),Main.class);
			//myButton.setBackgroundResource(R.drawable.icon_100_b);
            startActivity(intent);
		}
		});
		
	}
}
		
		
		
	


		
	
	

