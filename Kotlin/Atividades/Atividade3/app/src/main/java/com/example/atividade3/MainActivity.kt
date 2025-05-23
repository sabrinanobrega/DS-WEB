package com.example.atividade3

import android.os.Bundle
import android.util.Log
import androidx.activity.ComponentActivity
import androidx.activity.compose.setContent
import androidx.compose.foundation.clickable
import androidx.compose.foundation.layout.*
import androidx.compose.foundation.shape.CircleShape
import androidx.compose.material3.*
import androidx.compose.runtime.*
import androidx.compose.ui.Alignment
import androidx.compose.ui.Modifier
import androidx.compose.ui.graphics.Color
import androidx.compose.ui.text.TextStyle
import androidx.compose.ui.tooling.preview.Preview
import androidx.compose.ui.unit.dp
import androidx.compose.ui.unit.sp
import com.example.atividade3.ui.theme.Atividade3Theme

class MainActivity : ComponentActivity() {
    override fun onCreate(savedInstanceState: Bundle?) {
        super.onCreate(savedInstanceState)
        setContent {
            Atividade3Theme {
                TelaPrincipal()
            }
        }
    }
}

@Composable
fun TelaPrincipal() {
    var pontosA by remember { mutableStateOf(0) }
    var pontosB by remember { mutableStateOf(0) }

    Surface(
        modifier = Modifier
            .fillMaxSize(),
        color = Color.Green,
    ) {
        Column(
            verticalArrangement = Arrangement.Center,
            horizontalAlignment = Alignment.CenterHorizontally,
            modifier = Modifier.fillMaxSize()
        ) {
            Text(
                text = "ponto de cada time",
                style = TextStyle(
                    color = Color.Black,
                    fontSize = 39.sp
                )
            )

            Spacer(modifier = Modifier.height(50.dp))


            Column(
                horizontalAlignment = Alignment.CenterHorizontally,
                verticalArrangement = Arrangement.spacedBy(32.dp),
                modifier = Modifier.fillMaxWidth()
            ) {

                CreateCircle("Time A", pontosA) { pontosA += 1 }
                CreateCircle("Time B", pontosB) { pontosB += 1 }
            }
        }
    }
}

@Composable
fun CreateCircle(time: String, pontos: Int, onTap: () -> Unit) {
    Card(
        modifier = Modifier
            .padding(8.dp)
            .size(150.dp)
            .clickable {
                onTap()
                Log.d("Contador", "CreateCircle: $time $pontos")
            },
        shape = CircleShape,
        colors = CardDefaults.cardColors(containerColor = Color(0xFF009688))
    ) {
        Box(
            modifier = Modifier.fillMaxSize(),
            contentAlignment = Alignment.Center
        ) {
            Column(horizontalAlignment = Alignment.CenterHorizontally) {
                Text(
                    text = "$time",
                    color = Color.White,
                    fontSize = 20.sp
                )
                Text(
                    text = "Pontos: $pontos",
                    color = Color.White,
                    fontSize = 18.sp
                )
            }
        }
    }
}

@Preview(showBackground = true)
@Composable
fun DefaultPreview() {
    Atividade3Theme {
        TelaPrincipal()
    }
}
