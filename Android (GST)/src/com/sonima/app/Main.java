package com.sonima.app;


// OPTIONS
//http://developer.android.com/guide/topics/ui/dialogs.html#AlertDialog
//http://developer.android.com/reference/android/app/AlertDialog.Builder.html
//AlertDialog.Builder	 setView(View view)
//Set a custom view to be the contents of the Dialog.




//http://viralpatel.net/blogs/android-preferences-activity-example/
//http://developer.android.com/guide/topics/ui/menus.html#PopupMenu


//http://www.jawish.org/blog/archives/394-Google-Docs-Viewer-plugin-for-jQuery.html

//http://www.pdfonline.com/



import android.app.Activity;
import android.app.AlertDialog;
import android.app.Dialog;
import android.content.DialogInterface;
import android.content.Intent;
import android.graphics.Bitmap;
import android.os.Bundle;
import android.util.Log;
import android.view.LayoutInflater;
import android.view.SurfaceHolder;
import android.view.SurfaceView;
import android.view.View;
import android.view.Window;
import android.view.View.OnClickListener;
import android.webkit.WebChromeClient;
import android.webkit.WebSettings;
import android.webkit.WebView;
import android.webkit.WebViewClient;
import android.webkit.WebSettings.RenderPriority;
import android.widget.EditText;
import android.widget.FrameLayout;
import android.widget.ImageButton;
import android.widget.ProgressBar;
import android.widget.TextView;
import android.widget.Toast;
import android.widget.ToggleButton;
import android.widget.ViewSwitcher;





import com.sonima.app.Intro;
import com.sonima.app.R;

import com.gstreamer.GStreamer;

public class Main extends Activity implements SurfaceHolder.Callback {
    private native void nativeInit();     // Initialize native code, build pipeline, etc
    private native void nativeFinalize(); // Destroy pipeline and shutdown native code
    private native void nativePlay();     // Set pipeline to PLAYING
    private native void nativePause();    // Set pipeline to PAUSED
    private static native boolean nativeClassInit(); // Initialize native class: cache Method IDs for callbacks
    private native void nativeSurfaceInit(Object surface);
    private native void nativeSurfaceFinalize();
    private long native_custom_data;      // Native code will use this to keep private data
	private ProgressBar progress;

    private boolean is_playing_desired;   // Whether the user asked to go to PLAYING

	private ToggleButton camB;
	private ToggleButton docB;
	private ToggleButton cogB;
	private ImageButton camButton;
	private ImageButton docButton;
	private ImageButton backB;
	private int status=0;
	private int status2=0;
    //private String url = getResources().getString(R.string.http).concat(getResources().getString(R.string.ip));
    private String url = "192.168.42.1";

	
	
	
    // Called when the activity is first created.
    @Override
    public void onCreate(Bundle savedInstanceState)
    {
        super.onCreate(savedInstanceState);
        requestWindowFeature(Window.FEATURE_NO_TITLE);
        setContentView(R.layout.main);
        

        
        
        // Initialize GStreamer and warn if it fails
        try {
            GStreamer.init(this);
        } catch (Exception e) {
            Toast.makeText(this, e.getMessage(), Toast.LENGTH_LONG).show();
            finish(); 
            return;
        }

		final ViewSwitcher switcher = (ViewSwitcher) findViewById(R.id.view_switcher);
		switcher.showNext();
		camB=(ToggleButton)findViewById(R.id.camB);
		camB.setOnClickListener(new View.OnClickListener() {
		//@SuppressLint("NewApi")
		public void onClick(View component) {
			switcher.showNext();
			if (status==0){ 
				status=1;
                is_playing_desired = true;
                nativePlay();
			}else{
				status=0;
                is_playing_desired = false;
                nativePause();

			}
		}
		});
		
		camButton=(ImageButton)findViewById(R.id.camButton);
		camButton.setOnClickListener(new View.OnClickListener() {
		public void onClick(View component) {
			switcher.showNext();
			camB.setChecked(true);
			status=1;
            is_playing_desired = true;
            nativePlay();

		}
		});
		
		

		
		progress = (ProgressBar) findViewById(R.id.progressBar);
        progress.setVisibility(View.GONE);
        //final String url = "http://www.ayudea.es/Prueba/OK/index.html";
        //final String url = "http://192.168.42.1";
        //final String url = "http://mozilla.github.io/pdf.js/web/viewer.html";
		final WebView myWebView = (WebView) findViewById(R.id.webview);
		myWebView.setWebViewClient(new MyWebViewClient());
		//myWebView.setWebChromeClient(new WebChromeClient()); 
		//myWebView.setWebViewClient(new WebViewClient());

		myWebView.getSettings().setSupportZoom(true);
		// HTML5 best config
		//myWebView.setFocusable(true);
		//myWebView.setFocusableInTouchMode(true);
		myWebView.getSettings().setJavaScriptEnabled(true);
		//myWebView.getSettings().setPluginsEnabled(true);
		myWebView.getSettings().setRenderPriority(RenderPriority.HIGH);
		myWebView.getSettings().setCacheMode(WebSettings.LOAD_NO_CACHE);
		//myWebView.getSettings().setDomStorageEnabled(true);
		//myWebView.getSettings().setDatabaseEnabled(true);
		myWebView.getSettings().setAppCacheEnabled(true);
		//myWebView.setScrollBarStyle(View.SCROLLBARS_INSIDE_OVERLAY);
		myWebView.getSettings().setBuiltInZoomControls(true);
		myWebView.getSettings().setDisplayZoomControls(false);
		//myWebView.getSettings().setDefaultZoom(WebSettings.ZoomDensity.FAR);
		//myWebView.setInitialScale(50);
		//myWebView.loadUrl(url);
		
		final ViewSwitcher switcher2 = (ViewSwitcher) findViewById(R.id.view_switcher2);
		switcher2.showNext();
		docB=(ToggleButton)findViewById(R.id.docB);
		docB.setOnClickListener(new View.OnClickListener() {
		//@SuppressLint("NewApi")
		public void onClick(View component) {
			switcher2.showNext();
			if (status2==0){ 
				myWebView.loadUrl(getResources().getString(R.string.http).concat(url));
				status2=1;
			}else{
				myWebView.clearCache(true);
				myWebView.loadUrl("about:blank");
				status2=0;
			}
		}
		});		
			
		docButton=(ImageButton)findViewById(R.id.docButton);
		docButton.setOnClickListener(new View.OnClickListener() {
		public void onClick(View component) {
			switcher2.showNext();
			myWebView.loadUrl(getResources().getString(R.string.http).concat(url));
			docB.setChecked(true);
			status2=1;

		}
		});
		
		backB=(ImageButton)findViewById(R.id.backB);
		backB.setOnClickListener(new View.OnClickListener() {
		
		public void onClick(View component) {
			Intent intent = new Intent(getApplicationContext(),Intro.class);
            startActivity(intent);
		}
		});
		
		
        ////////// OPTIONS ---

        final AlertDialog.Builder builder = new AlertDialog.Builder(this, android.R.style.Theme_Holo_Light_Panel);

		cogB=(ToggleButton)findViewById(R.id.cogB);
		cogB.setOnClickListener(new View.OnClickListener() {
		//@SuppressLint("NewApi")
		public void onClick(View component) {
			if (status2==1){
				switcher2.showNext();
				myWebView.clearCache(true);
				myWebView.loadUrl("about:blank");
				status2=0;
				docB.setChecked(false);
			}
			 // Get the layout inflater
	        LayoutInflater inflater = getLayoutInflater();
	        builder.setCancelable(false);
	        
	        final View options =inflater.inflate(R.layout.menu_options, null);
     	    final EditText inputbox_ip = (EditText) options.findViewById(R.id.ip_rpi);  
     	    inputbox_ip.setHint(url);
	        // Inflate and set the layout for the dialog
	        // Pass null as the parent view because its going in the dialog layout
	        builder.setView(options)
	        // Add action buttons
	               .setPositiveButton(R.string.aceptar, new DialogInterface.OnClickListener() {
	                   @Override
	                   public void onClick(DialogInterface dialog, int id) {
	                	   cogB.setChecked(false);
	                	   if(!inputbox_ip.getText().toString().equals("")){
		                	   url = inputbox_ip.getText().toString();
		                	   inputbox_ip.setHint(url);
	                	   }
	                   }
	               })
	               .setNegativeButton(R.string.cancelar, new DialogInterface.OnClickListener() {
	                   public void onClick(DialogInterface dialog, int id) {
	                	   cogB.setChecked(false);  
	                   }
	               });      
	        builder.create();
	        builder.show();
		}
		});
		


        ///////
		
		
		
		
/* BOTONES PLAY Y PAUSE ORIGINALES:
        ImageButton play = (ImageButton) this.findViewById(R.id.button_play);
        play.setOnClickListener(new OnClickListener() {
            public void onClick(View v) {
                is_playing_desired = true;
                nativePlay();
            }
        });
        ImageButton pause = (ImageButton) this.findViewById(R.id.button_stop);
        pause.setOnClickListener(new OnClickListener() {
            public void onClick(View v) {
                is_playing_desired = false;
                nativePause();
            }
        });
        
        // Start with disabled buttons, until native code is initialized
        this.findViewById(R.id.button_play).setEnabled(false);
        this.findViewById(R.id.button_stop).setEnabled(false);
*/
		
        SurfaceView sv = (SurfaceView) this.findViewById(R.id.surface_video);
        SurfaceHolder sh = sv.getHolder();
        sh.addCallback(this);

        if (savedInstanceState != null) {
            is_playing_desired = savedInstanceState.getBoolean("playing");
            Log.i ("GStreamer", "Activity created. Saved state is playing:" + is_playing_desired);
        } else {
            is_playing_desired = false;
            Log.i ("GStreamer", "Activity created. There is no saved state, playing: false");
        }


        nativeInit();
    }

    protected void onSaveInstanceState (Bundle outState) {
        Log.d ("GStreamer", "Saving state, playing:" + is_playing_desired);
        outState.putBoolean("playing", is_playing_desired);
    }

    protected void onDestroy() {
        nativeFinalize();
        super.onDestroy();
    }

 
    // Called from native code. This sets the content of the TextView from the UI thread.
    private void setMessage(final String message) {
        //final TextView tv = (TextView) this.findViewById(R.id.textview_message);
        runOnUiThread (new Runnable() {
          public void run() {
        //    tv.setText(message);
          }
        });
    }

    // Called from native code. Native code calls this once it has created its pipeline and
    // the main loop is running, so it is ready to accept commands.
    private void onGStreamerInitialized () {
        Log.i ("GStreamer", "Gst initialized. Restoring state, playing:" + is_playing_desired);
        // Restore previous playing state
        if (is_playing_desired) {
            nativePlay();
        } else {
            nativePause();
        }

        /* BOTONES ORIGINALES
        // Re-enable buttons, now that GStreamer is initialized
        final Activity activity = this;
        runOnUiThread(new Runnable() {
            public void run() {
                activity.findViewById(R.id.button_play).setEnabled(true);
                activity.findViewById(R.id.button_stop).setEnabled(true);
            }
        });
        */
    }
    

    static {
        System.loadLibrary("gstreamer_android");
        System.loadLibrary("gst_pipeline");
        nativeClassInit();
    }

    public void surfaceChanged(SurfaceHolder holder, int format, int width,
            int height) {
        Log.d("GStreamer", "Surface changed to format " + format + " width "
                + width + " height " + height);
        nativeSurfaceInit (holder.getSurface());
    }

    public void surfaceCreated(SurfaceHolder holder) {
        Log.d("GStreamer", "Surface created: " + holder.getSurface());
    }

    public void surfaceDestroyed(SurfaceHolder holder) {
        Log.d("GStreamer", "Surface destroyed");
        nativeSurfaceFinalize ();
    }
	private class MyWebViewClient extends WebViewClient { 
        @Override 
        //show the web page in webview but not in web browser
        public boolean shouldOverrideUrlLoading(WebView view, String url) { 
            view.loadUrl (url); 
            return true;
        } 
        @Override
       public void onPageFinished(WebView view, String url) {
            progress.setVisibility(View.GONE);
               Main.this.progress.setProgress(100);
           super.onPageFinished(view, url);
       }

        @Override
       public void onPageStarted(WebView view, String url, Bitmap favicon) {
            progress.setVisibility(View.VISIBLE);
           Main.this.progress.setProgress(0);
           super.onPageStarted(view, url, favicon);
       }
    }
    public void setValue(int progress) {
        this.progress.setProgress(progress);        
    }
    
    


}
