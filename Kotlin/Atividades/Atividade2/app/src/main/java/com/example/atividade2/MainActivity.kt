package com.example.atividade2
import android.os.Bundle
import androidx.activity.ComponentActivity
import androidx.activity.compose.setContent
import androidx.compose.foundation.background
import androidx.compose.foundation.clickable
import androidx.compose.foundation.layout.*
import androidx.compose.foundation.shape.CircleShape
import androidx.compose.foundation.shape.RoundedCornerShape
import androidx.compose.material3.*
import androidx.compose.runtime.Composable
import androidx.compose.ui.Alignment
import androidx.compose.ui.Modifier
import androidx.compose.ui.graphics.Color
import androidx.compose.ui.text.TextStyle
import androidx.compose.ui.tooling.preview.Preview
import androidx.compose.ui.unit.dp
import androidx.compose.ui.unit.sp
import com.example.atividade2.ui.theme.Atividade2Theme

class MainActivity : ComponentActivity() {
    override fun onCreate(savedInstanceState: Bundle?) {
        super.onCreate(savedInstanceState)
        setContent {
            Atividade2Theme {
                TelaPrincipal()
            }
        }
    }
}

@Preview
@Composable
fun TelaPrincipal() {
    Column(
        horizontalAlignment = Alignment.CenterHorizontally,
        modifier = Modifier
            .fillMaxSize()
            .background(Color.Gray)
            .padding(10.dp)
    ) {
        Text(
            text = "Lista de produtos",
            style = TextStyle(
                color = Color.Green,
                fontSize = 30.sp
            )
        )

        Spacer(modifier = Modifier.height(16.dp))

        CartaoDeProduto("Chocolate Lindt", "R$90,00")
    }
}

@Composable
fun CartaoDeProduto(produto: String, valor: String) {
    Card(
        modifier = Modifier
            .fillMaxWidth()
            .padding(8.dp),
        shape = RoundedCornerShape(8.dp)
    ) {
        Column(
            modifier = Modifier
                .padding(16.dp)
                .fillMaxWidth(),
            verticalArrangement = Arrangement.spacedBy(12.dp),
            horizontalAlignment = Alignment.CenterHorizontally
        ) {
            Text(text = "Produto: $produto", fontSize = 20.sp)
            Text(text = "Preço: $valor", fontSize = 18.sp)

            BotaoComprar()
        }
    }
}

@Composable
fun BotaoComprar() {
    Card(
        modifier = Modifier
            .size(100.dp)
            .clickable {},
        shape = CircleShape,
        colors = CardDefaults.cardColors(containerColor = Color.Green)
    ) {
        Box(
            modifier = Modifier.fillMaxSize(),
            contentAlignment = Alignment.Center
        ) {
            Text(
                text = "Comprar",
                color = Color.White,
                fontSize = 16.sp
            )
        }
    }
}
