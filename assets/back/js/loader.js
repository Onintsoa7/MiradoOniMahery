class SpinningDots extends HTMLElement {
  
  constructor() {
    super()
    const width = parseInt(this.getAttribute("width"), 10) || 50
    const circleRadius = parseInt(this.getAttribute("circle-radius"), 10) || 3
    const circles = parseInt(this.getAttribute("dots"), 10) || 8
    const root = this.attachShadow({mode: 'open'})
    root.innerHTML = `
      <div>
        ${this.buildStyle(width, circleRadius * 2, circles)}
        ${this.buildTrail(width / 2 - circleRadius, circleRadius * 2)}
        ${this.buildCircles(width, circles, circleRadius)}
      </div>
    `
  }

  buildTrail(r, stroke) { 
    const w = r * 2 + stroke
    let dom = `<svg class="trail" height="${w}" width="${w}" viewBox="0 0 ${w} ${w}" fill="none">`
    dom += `<circle 
            cx="${w / 2}" 
            cy="${w / 2}" 
            r="${r}" 
            stroke="currentColor"
            stroke-width="${stroke}"
            stroke-linecap="round"
            />`
    return dom + "</svg>"
  } 

  buildCircles(w, n, r) {
    let dom = `<svg class="circles" height="${w}" width="${w}" viewBox="0 0 ${w} ${w}">`
    const radius = (w / 2 - r)
    for(let i = 0; i < n; i ++) {
      const angle = i * (Math.PI * 2) / n
      const x = radius * Math.sin(angle) + w / 2
      const y = radius * Math.cos(angle) + w / 2
      dom += `<circle cx="${x}" cy="${y}" r="${r}" fill="currentColor"/>`
    }
    return dom + "</svg>"
  }

  buildStyle(w, stroke, n) {
    const perimeter = Math.PI * (w - stroke)
    return `
      <style>
        div {
          height: ${w}px;
          width: ${w}px;
          position: relative;
        }
        svg {
          position: absolute;
          top: 0;
          left: 0;
        }
        .circles {
          animation: spin 16s linear infinite;
        } 
        .trail {
          stroke-dasharray: ${perimeter};
          stroke-dashoffset: ${perimeter * 3};
          animation: spin2 1.6s cubic-bezier(.5, .15, .5, .85) infinite;
        }
        .trail circle {
          animation: trail 1.6s cubic-bezier(.5, .15, .5, .85) infinite;
        }
        @keyframes spin {
          from {
            transform: rotate(0deg);
          } to {
            transform: rotate(360deg);
          }
        }
        @keyframes spin2 {
          from {
            transform: rotate(0deg);
          } to {
            transform: rotate(720deg);
          }
        }
        @keyframes trail {
          0% {
            stroke-dashoffset: ${perimeter + perimeter / n};
          } 50% {
            stroke-dashoffset: ${perimeter + perimeter / 3 + perimeter / n};
          } 100% {
            stroke-dashoffset: ${perimeter + perimeter / n};
          }
        }
      </style>
    `
  }

}

try {
  customElements.define("spinning-dots", SpinningDots)
} catch (error) {
  if(error instanceof DOMException) {
    console.log("DOMException: " + error.message)
  } else {
    throw error
  }
}